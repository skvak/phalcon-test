<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

class validationStep3 extends Validation
{
    public function initialize()
    {
        $this->add(
            "interests",
            new PresenceOf(
                [
                    "message" => "The interests is required",
                ]
            )
        );
    }
}