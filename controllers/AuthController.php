<?php
namespace app\controllers;
use app\core\Request;
use app\core\Controller;

/**
 * Class AuthController
 */
class AuthController extends Controller
{

  public function login()
  {
    $this->setLayout('auth');
    return $this->render('login');
  }

  public function register(Request $request)
  {
    if ($request->isPost()) {
      return 'handle sub data';
    }
    $this->setLayout('auth');
    return $this->render('register');
  }
}
