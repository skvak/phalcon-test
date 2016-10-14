<?php

//use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $fullname;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $city;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $interests;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

//    /**
//     * Validations and business logic
//     *
//     * @return boolean
//     */
//    public function validation()
//    {
//        $this->validate(
//            new Email(
//                array(
//                    'field'    => 'email',
//                    'required' => true,
//                )
//            )
//        );
//
//        if ($this->validationHasFailed() == true) {
//            return false;
//        }
//
//        return true;
//    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
