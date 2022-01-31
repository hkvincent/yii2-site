<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersImages */

$this->title = 'Update Users Images: ' . $model->UsersImagesID;
$this->params['breadcrumbs'][] = ['label' => 'Users Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UsersImagesID, 'url' => ['view', 'id' => $model->UsersImagesID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
