<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);



//require autoload
require_once('vendor/autoload.php');
$datalayer = new Datalayer();

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
$f3 -> route('GET|POST /register', function(){


    $GLOBALS['controller']->register();

});

$f3->route('GET /leader', function() {
    $GLOBALS['controller']->leader();
});

$f3->run();
