<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsersImages */

$this->title = $model->UsersImagesID;
$this->params['breadcrumbs'][] = ['label' => 'Users Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UsersImagesID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UsersImagesID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UsersImagesID',
            'UsersID',
            'ImagesID',
        ],
    ]) ?>

</div>
