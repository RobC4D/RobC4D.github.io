<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});
$app->get('/Tdata.twig', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('Tdata.twig');
});
$app->get('/DaemonCollector.php', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('DaemonCollector.php');
});
$app->get('/Subscription.php', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('Subscription.php');
});
$app->run();
