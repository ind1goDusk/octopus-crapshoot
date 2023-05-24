<?php

/**
 * This class represents a user.
 * @author David Kurilla
 */
class User
{

    private string $_username;
    private string $_password;
    private bool $_isSuperUser;

    private int $_coins;

    /**
     * This is the constructor for the user class.
     * @param string $username the username of the user
     * @param string $password the password of the user
     */
    function __construct(string $username, string $password)
    {
        $this->_username = $username;
        $this->_password = $password;
        $this->_isSuperUser = false;
        $this->_coins = 0;
    }

    /**
     * This method gets the username of the user.
     * @return string the username of the user
     */
    function getUsername(): string
    {
        return $this->_username;
    }

    /**
     * This method sets the username of the user.
     * @param string $username the username of the user
     */
    function setUsername(string $username): void
    {
        $this->_username = $username;
    }

    /**
     * This method gets the password of the user.
     * @return string the password of the user
     */
    function getPassword(): string
    {
        return $this->_password;
    }

    /**
     * This method sets the password of the user.
     * @param string $password the password of the user
     */
    function setPassword(string $password): void
    {
        $this->_password = $password;
    }

    /**
     * This method gets the user's SuperUser status.
     * @return bool the user's SuperUser status
     */
    function getIsSuperUser(): bool
    {
        return $this->_isSuperUser;
    }

    /**
     * This method sets a user's SuperUser status.
     * @param bool $value the user's SuperUser status
     */
    function setIsSuperUser(bool $value): void
    {
        $this->_isSuperUser = $value;
    }

    /**
     * This method gets the coins of the user.
     * @return int the coins of the user
     */
    public function getCoins(): int
    {
        return $this->_coins;
    }

    /**
     * This method sets the coins of the user.
     * @param int $coins the coins of the user
     */
    public function setCoins(int $coins): void
    {
        $this->_coins = $coins;
    }

}
