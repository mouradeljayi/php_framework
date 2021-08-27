<?php

/** @var $model \app\models\User */

 ?>

<h1 class="mt-5">Login</h1>

<div class="row justify-content-center">
  <div class="col-md-6">
    <?php $form = \app\core\form\Form::begin('', "post") ?>

        <?php echo $form->field($model, 'email') ?>
        <?php echo $form->field($model, 'password')->passwordField() ?>

        <button type="submit" class="btn btn-primary mt-2">Login</button>

    <?php \app\core\form\Form::end() ?>

  </div>
</div>
