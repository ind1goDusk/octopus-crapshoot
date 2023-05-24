<?php

class SuperUser extends User
{

    private string $_email;

    function __construct(string $username, string $password, string $email)
    {
        parent::__construct($username, $password);
        parent::setIsSuperUser(true);
        $this->_email = $email;
    }

    function getEmail(): string
    {
        return $this->_email;
    }

    function setEmail(string $email): void
    {
        $this->_email = $email;
    }

}