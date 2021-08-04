<?php

/** User: Mourad EL Jayi **/

require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
  return 'Home page';
});

$app->router->get('/contact', function() {
  return 'Contact page';
});

$app->run();
