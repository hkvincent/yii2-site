<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersProperties */

$this->title = 'Update Users Properties: ' . $model->UsersPropertiesID;
$this->params['breadcrumbs'][] = ['label' => 'Users Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UsersPropertiesID, 'url' => ['view', 'id' => $model->UsersPropertiesID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
