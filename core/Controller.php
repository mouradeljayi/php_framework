<?php

namespace app\core;
use app\core\Application;

/**
 * Class Controller
 */
class Controller
{

  public string $layout = "main";

  public function setLayout($layout)
  {
    $this->layout = $layout;
  }

  public function render($view, $params = [])
  {
    return Application::$app->router->renderView($view, $params);
  }

}
