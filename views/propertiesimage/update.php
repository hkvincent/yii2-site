<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PropertiesImage */

$this->title = 'Update Properties Image: ' . $model->ProportiesImagesID;
$this->params['breadcrumbs'][] = ['label' => 'Properties Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProportiesImagesID, 'url' => ['view', 'id' => $model->ProportiesImagesID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="properties-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
