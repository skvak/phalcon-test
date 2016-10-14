<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

class validationStep2 extends Validation
{
    public function initialize()
    {
        $this->add(
            "city",
            new PresenceOf(
                [
                    "message" => "The city is required",
                ]
            )
        );

        $this->add(
            "address",
            new PresenceOf(
                [
                    "message" => "The address is required",
                ]
            )
        );
    }
}