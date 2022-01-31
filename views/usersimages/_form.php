<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UsersID')->textInput() ?>

    <?= $form->field($model, 'ImagesID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
