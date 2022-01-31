<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */

$this->title = 'Update Properties: ' . $model->PropertiesID;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PropertiesID, 'url' => ['view', 'id' => $model->PropertiesID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
