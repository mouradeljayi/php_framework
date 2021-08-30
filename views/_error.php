<?php

/** @var $exception \Exception */

 ?>

 <div class="container text-center text-warning mt-5">
   <h1><?php echo $exception->getCode(); ?></h1>
   <h1> <?php echo $exception->getMessage();?></h1>
 </div>
