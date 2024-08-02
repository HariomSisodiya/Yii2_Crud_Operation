<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'CRUD using Yii';
?>
<div class="container" >
    <h1 class="text-primary mt-3 text-decoration-underline" >Add Product</h1>
    
    <?php $form = ActiveForm::begin()?>
    <div class="row mt-5" >
        <div class="form-group" >
            <div class="col-md-6" >
                <?= $form->field($product  , 'title') ?>
            </div>

            <div class="col-md-6" >
                <?= $form->field($product  , 'description')->textarea(['rows' => '6']) ?>
            </div>

            <div class="col-md-6" >
                <?= $form->field($product  , 'price') ?>
            </div>

            <div class="col-md-3 mt-5" >
                <?= Html::submitButton('Add Product' , ['class' => 'btn btn-primary']) ?>
                <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary" style="margin-left : 40px" >Go back</a>
            </div>

            
        </div>
    </div>
    <?php ActiveForm::end() ?>
</div>

<style>
    .help-block{
        color: red;
    }
</style>