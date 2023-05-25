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
$f3 -> route('GET /', function(){
    // echo '<h1>Hello World!</h1>';
    //display view page
    $view = new Template();
    echo $view->render('views/game.html');
});

//login route
$f3 -> route('GET /login', function(){
        $view = new Template();
    echo $view->render('views/login.html');
});

//home route
$f3 -> route('GET /how-to-play', function(){
    $view = new Template();
    echo $view->render('views/tutorial.html');
});

$f3->run();
