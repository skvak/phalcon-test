<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

class validationStep1 extends Validation
{
    public function initialize()
    {
        $this->add(
            "fullname",
            new PresenceOf(
                [
                    "message" => "The fullname is required",
                ]
            )
        );

        $this->add(
            "email",
            new PresenceOf(
                [
                    "message" => "The e-mail is required",
                ]
            )
        );

        $this->add(
            "email",
            new Email(
                [
                    "message" => "The e-mail is not valid",
                ]
            )
        );

        $this->add(
            "password",
            new PresenceOf(
                [
                    "message" => "The password is required",
                ]
            )
        );
    }
}