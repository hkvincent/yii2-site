<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $form ActiveForm */
?>
<div class="site-addproperty">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'Address1') ?>
    <?= $form->field($model, 'Address2') ?>
    <?= $form->field($model, 'Address3') ?>
    <?= $form->field($model, 'Postcode') ?>
    <?= $form->field($model, 'Type') ?>
    <?= $form->field($model, 'Price') ?>
    <?= $form->field($model, 'Description') ?>
    <?= $form->field($model, 'SaleStatus') ?>
    <?= $form->field($model, 'Created') ?>
    <?= $form->field($model, 'Updated') ?>
    <?= $form->field($model, 'Deleted') ?>
    <?= $form->field($model2, 'Created') ?>
    <?= $form->field($model2, 'Updated') ?>
    <?= $form->field($model2, 'Deleted') ?>
    <?= $form->field($model2, 'ImagePath')->fileInput() ?>

    
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-addproperty -->
