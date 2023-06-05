<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//Create instance of Controller and Base
$f3 = Base::instance();
$controller = new Controller($f3);

//define default route
$f3 -> route('GET /', function() {
    // echo '<h1>Hello World!</h1>';
    //display view page
    $GLOBALS['controller']->game();
});

//login route
$f3 -> route('GET|POST /login', function($f3){

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
            $f3->set('SESSION.username', $username);
            $f3->set('SESSION.password', $password);

            $GLOBALS['controller']->hiveGet($username);
            $GLOBALS['controller']->hiveGet($password);

            $userData = array($username, $password);

            $cargo = $GLOBALS['controller']->packCargo($userData);
            $GLOBALS['controller']->shipCargo($cargo);

        } else {
            $f3->set('errors[username]', 'Invalid user name!');
            echo $f3->get('errors[username]');
        }

        if(empty($f3->get("errors"))) {
            $f3->reroute('/success');
        }

    }



    $GLOBALS['controller']->login();
});

$f3->route('GET /shop', function() {
    $GLOBALS['controller']->shop();
});

$f3->route('GET /success', function() {
    $GLOBALS['controller']->success();
});

//home route
$f3 -> route('GET /how-to-play', function(){
    $GLOBALS['controller']->howToPlay();
});
//register route
$f3 -> route('GET /register', function(){
    $GLOBALS['controller']->register();
});

$f3->run();
