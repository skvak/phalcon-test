<?php

use Phalcon\DI;

use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function stepAction()
    {
        if ($this->session->get("user")){
            $this->session->remove("user");
        }
        $step = null !== $this->request->getPost("step") ?  $this->request->getPost("step") : 1;

        switch ($step) {
            case 1:
                return $this->view->pick("index/step1");
            case 2:
                if ($this->request->isPost()) {
                    $validation = new validationStep1();

                    $messages = $validation->validate($_POST);

                    if (count($messages)) {
                        foreach ($messages as $message){
                            $errors[] = $message;
                        }
                        $errors = implode(',<br>', $errors);
                        $this->flashSession->error($errors);

                        return $this->response->redirect("step1");
                    }

                    $user = new Users();
                    $user->fullname = $this->request->getPost("fullname");
                    $user->email = $this->request->getPost("email");
                    $user->password = $this->security->hash($this->request->getPost("password"));

                    $this->session->set("user", $user);

                    return $this->view->pick("index/step2");
                }

                return $this->response->redirect("step1");

            case 3:
                if ($this->request->isPost()) {
                    $validation = new validationStep2();

                    $messages = $validation->validate($_POST);

                    if (count($messages)) {
                        foreach ($messages as $message){
                            $errors[] = $message;
                        }
                        $errors = implode(',<br>', $errors);
                        $this->flashSession->error($errors);

                        return $this->response->redirect("step2");
                    }

                    $user = $this->session->get("user");
                    $user->city = $this->request->getPost("city");
                    $user->address = $this->request->getPost("address");
                    $this->session->set("user", $user);

                    return $this->view->pick("index/step3");
                }

                return $this->response->redirect("step2");
        }
    }

    public function registrationAction()
    {
        if ($this->request->isPost())
        {
            $validation = validationStep3();

            $messages = $validation->validate($_POST);

            if (count($messages)) {
                foreach ($messages as $message){
                    $errors[] = $message;
                }
                $errors = implode(',<br>', $errors);
                $this->flashSession->error($errors);

                return $this->response->redirect("step3");
            }

            $user = $this->session->get("user");
            $user->interests = $this->request->getPost("interests");
            $user->created_at = date("Y-m-d H:i:s");
            $user->save();

            $this->session->remove("user");
        }

        return $this->view->pick("index/finish");
    }
}

