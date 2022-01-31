<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $form ActiveForm */
?>

<div class="site-addproperty">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

        <?= $form->field($model, 'file')->fileInput() ?>
        
		<!--<?= $form->field($model, 'ImagePath')->fileInput()?>-->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-addproperty -->