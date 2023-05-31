<?php

/**
 * This class represents the controller for the application
 * @author David Kurilla
 */
class Controller
{

    private $_f3;

    /**
     * This is the constructor for the class.
     * @param $f3 the base instance of the F3 class
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * This method routes to the game view.
     */
    function game(): void
    {
        $view = new Template();
        echo $view->render('views/game.html');
    }

    /**
     * This method routes to the login view.
     */
    function login(): void
    {
        $view = new Template();
        echo $view->render('views/login.html');
    }

    /**
     * This method routes to the how to play view.
     */
    function howToPlay(): void
    {
        $view = new Template();
        echo $view->render('views/tutorial.html');
    }

    /**
     * This method routes to the shop view.
     */
    function shop(): void
    {
        $view = new Template();
        echo $view->render('views/shop.html');
    }

    /**
     * This method routes to the login success view.
     */
    function success(): void
    {
        $view = new Template();
        echo $view->render('views/success.html');
    }

    function hiveGet(string $data): void
    {
        $this->_f3->get('SESSION.' . $data);
    }
}