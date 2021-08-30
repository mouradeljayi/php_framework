<?php

namespace app\core\exception;

/**
 * Class NotFoundException
 */
class NotFoundException extends \Exception
{
  protected $code = 404;
  protected $message = "This page doesn't exist";
}
