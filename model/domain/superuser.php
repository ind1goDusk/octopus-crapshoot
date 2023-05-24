<?php

/**
 * This class represents a SuperUser.
 * @author David Kurilla
 */
class SuperUser extends User
{

    private string $_email;

    /**
     * This is the constructor for the SuperUser.
     * @param string $username the username of the SuperUser
     * @param string $password the password of the SuperUser
     * @param string $email the email of the SuperUser
     */
    function __construct(string $username, string $password, string $email)
    {
        parent::__construct($username, $password);
        parent::setIsSuperUser(true);
        $this->_email = $email;
    }

    /**
     * This method gets the email of the SuperUser.
     * @return string the email of the SuperUser
     */
    function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * This method sets the email of the SuperUser.
     * @param string $email the email of the SuperUser
     */
    function setEmail(string $email): void
    {
        $this->_email = $email;
    }

}