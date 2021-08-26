<?php
namespace app\controllers;
use app\core\Request;
use app\core\Controller;
use app\core\Application;
use app\models\User;

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

    $user = new User();

    if ($request->isPost()) {

      $user->loadData($request->getBody());

      if($user->validate() && $user->save()) {
        Application::$app->session->setFlash('success', 'You have registerd successfuly');
        Application::$app->response->redirect('/');
        exit;
      }

      return $this->render('register', [
        'model' => $user
      ]);
    }

    $this->setLayout('auth');
    return $this->render('register', [
      'model' => $user
    ]);
  }
}
