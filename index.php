<?php
    /*
     * Author: Evgenii Mishkin
     * Date: 01/15/2020
     * URL: http://emishkin.greenriverdev.com/328/chicken/index.php
     * Description:
     */

    // Turn on error reporting - this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require autoload file
    require ("vendor/autoload.php");

    //Instantiate F3
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function (){
        $view = new Template();
        echo $view->render('views/all-about-chickens.html');
    });

    //Run fat free
    $f3->run();