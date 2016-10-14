<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    

    <title>Registration -

        
    Step 1


    </title>
</head>
<body>
    <div class="container">

        
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <p><?php $this->flashSession->output() ?></p>
                    <?php echo $this->tag->form(array('step2', 'method' => 'post')); ?>
                        <label>Fullname</label>
                        <?php echo $this->tag->textField(array('fullname', 'size' => 50, 'required' => true, 'autofocus' => true, 'placeholder' => 'Bruce Willis', 'value' => '')); ?>

                        <label>E-mail</label>
                        <?php echo $this->tag->emailField(array('email', 'size' => 50, 'required' => true, 'placeholder' => 'yourmail@mail.com', 'value' => '')); ?>

                        <label>Password</label>
                        <?php echo $this->tag->passwordField(array('password', 'size' => 50, 'required' => true, 'placeholder' => 'Your password')); ?>

                        <?php echo $this->tag->hiddenField(array('step', 'value' => 2)); ?>

                        <?php echo $this->tag->submitButton(array('Next step')); ?>
                    <?php echo $this->tag->endform(); ?>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>


    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="copyright">
                        © 2016. Registration Step by step. All rights reserved
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <?php echo $this->tag->linkTo(array('/', 'Home')); ?> |  Created on Phalcon by <a href="mailto:a.kvak17@gmail.com">skvak</a>
                </div>
            </div>
        </div>
    </div>

    
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/1c97cae067.js"></script>
    
</body>
</html>