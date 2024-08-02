<?php

/** @var yii\web\View $this */

$this->title = 'CRUD using Yii';
?>

<div class="card mt-5">
  <h1 class="card-header text-primary ">View Product</h1>
  <div class="card-body">
    <h5 class="card-title">Title : <?php echo $product->title ?></h5>
    <p class="card-text">Description : <?php echo $product->description ?></p>
    <p class="card-text">Price : <?php echo $product->price ?></p>
    <a href= <?php echo Yii::$app->homeUrl; ?> class="btn btn-primary">Go back</a>
  </div>
</div>
