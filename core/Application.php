<?php

namespace app\core;

/**
 * Class Application
 */
class Application
{

  public Router $router;

  function __construct()
  {
    $this->router = new Router();
  }
}
