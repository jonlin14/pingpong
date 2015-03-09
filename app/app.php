<?php
    require_once __DIR__."/../vendor/autoload.php";
    //require_once __DIR__."/../src/ping_pong.php";

    $app = new Silex\Application;

    $app->register( new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
            return $app['twig']->render('front.php');
    });

    return $app;

    ?>
