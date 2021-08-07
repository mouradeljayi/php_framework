<?php

namespace app\controllers;
use app\core\Application;

/**
 * Class SiteController
 */
class SiteController
{

  public function home()
  {
    $params = [
      'name' => "MVCFRAME",
    ];

    return Application::$app->router->renderView('home', $params);
  }

  public function contact()
  {
    return Application::$app->router->renderView('contact');
  }

  public function handleContact()
  {
    return "Hello data from controller";
  }
}
