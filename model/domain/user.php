<?php

class User
{

    private string $_username;
    private string $_password;
    private bool $_isSuperUser;

    function __construct($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;
        $this->_isSuperUser = false;
    }

    function getUsername(): string
    {
        return $this->_username;
    }

    function setUsername($username): void
    {
        $this->_username = $username;
    }

    function getPassword(): string
    {
        return $this->_password;
    }

    function setPassword($password): void
    {
        $this->_password = $password;
    }

    function getIsSuperUser(): bool
    {
        return $this->_isSuperUser;
    }

    function setIsSuperUser($value): void
    {
        $this->_isSuperUser = $value;
    }

}
