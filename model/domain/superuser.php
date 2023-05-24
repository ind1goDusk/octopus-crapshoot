<?php

class SuperUser extends User
{

    private string $_email;

    function __construct($username, $password, $email)
    {
        parent::__construct($username, $password);
        parent::setIsSuperUser(true);
        $this->_email = $email;
    }

    function getEmail(): string
    {
        return $this->_email;
    }

    function setEmail($email): void
    {
        $this->_email = $email;
    }

}