<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pingpong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post("/create_ping_pong", function() use ($app) {
        $pingObject = new PingPong($_POST['limit']);
        return $app['twig']->render('create_ping_pong.twig', $pingObject->returnInput($_POST['limit']));
    });
    $app['debug']=true;
    return $app;

    ?>
