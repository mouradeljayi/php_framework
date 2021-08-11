<?php

namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\core\Request;


/**
 * Class SiteController
 */
class SiteController extends Controller
{

  public function home()
  {
    $params = [
      'name' => "Mourad EL Jayi",
    ];

    return $this->render('home', $params);
  }

  public function contact()
  {
    return $this->render('contact');
  }

  public function handleContact(Request $request)
  {
    $body = $request->getBody();

    echo "<pre>";
    var_dump($body);
    echo "</pre>";
    exit;
    return "Hello data from controller";
  }
}
