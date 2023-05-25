<?php

/**
 * This class represents the controller for the application
 * @author David Kurilla
 */
class Controller
{

    private Base $_f3;

    function __construct(Base $f3)
    {
        $this->_f3 = $f3;
    }

    function game(): void
    {
        $view = new Template();
        $view->render('views/game.html');
    }

    function login(): void
    {
        //TODO
    }

}