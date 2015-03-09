<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ReturnNumber.php";

    $app = new Silex\Application;

    $app->register( new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
            return $app['twig']->render('front.php');
    });

    $app->post("jackson", function() use ($app) {
        $limit=new ReturnNumber($_POST['limit1']);
        return $app['twig']->render('enterednumber.php', array('limit'=> $limit->getLimit()));
    });

    return $app;

    ?>
