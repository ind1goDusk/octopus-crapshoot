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
     * @param $f3. the base instance of the F3 class
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

        $username = "";
        $password = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST['username'])) {
                $username = $_POST['username'];
            }

            if(isset($_POST['password'])) {
                $password = $_POST['password'];
            }

            if(Validations::validateUsername($username)) {
                $this->_f3->set('SESSION.username', $username);
                $this->_f3->set('SESSION.password', $password);

                $GLOBALS['controller']->hiveGet($username);
                $GLOBALS['controller']->hiveGet($password);

                $userData = array($username, $password);

               // $cargo = $GLOBALS['controller']->packCargo($userData);
                //$GLOBALS['controller']->shipCargo($cargo);

            } else {
                $this->_f3->set('errors[username]', 'Invalid user name!');
                echo $this->_f3->get('errors[username]');
            }

            if(empty($this->_f3->get("errors"))) {
                $this->_f3->reroute('/success');
            }

        }


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
    /**
     * This method routes to the leaderboard view.
     */
    function leader(): void
    {
        $view = new Template();
        echo $view->render('views/leaderboard.html');
    }

    /**
     * This method gets data from the F3 hive.
     * @param string $data
     */
    function hiveGet(string $data): void
    {
        $this->_f3->get('SESSION.' . $data);
    }
    /**
     * This method routes to the register view.
     */
    function register(): void
    {
        $view = new Template();

        $username = "";
        $password = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //save variables
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }


            //validate

            if(Validations::validateUsername($username)){
                //construct user object
                $user = new User($username, $password);
                $user->setCoins(0);

                //place user into session
                $this->_f3->set('SESSION.user', $user);

                $GLOBALS['datalayer']->addUser($username, $password);


            }



            $this->_f3->reroute('how-to-play');

        }


        echo $view->render('views/signUp.html');
    }

    /**
     * This method creates a Cargo object and ships it to datalayer.
     * @param array $data the data in the Cargo.
     */
//    function packCargo(array $data): Cargo
//    {
//        $cargo = new Cargo($data);
//        return $cargo;
//    }
//
//    function shipCargo($cargo): void
//    {
//        $datalayer = new Datalayer();
//        $datalayer->unpackCargo($cargo);
//    }





}