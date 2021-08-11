<?php

namespace app\core;

/**
 * Class Application
 */
class Application
{
  public static string $ROOT_DIR;
  public Router $router;
  public Request $request;
  public Response $response;
  public static Application $app;
  public Controller $controller;

  function __construct($rootPath)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
  }

  public function getController(): \app\core\Controller
  {
    return $this->controller;
  }

  public function setController(\app\core\Controller $controller): void
  {
    $this->controller = $controller;
  }

  public function run()
  {
    echo $this->router->resolve();
  }

}
