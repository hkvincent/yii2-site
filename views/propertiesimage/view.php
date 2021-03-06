<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PropertiesImage */

$this->title = $model->ProportiesImagesID;
$this->params['breadcrumbs'][] = ['label' => 'Properties Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-image-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProportiesImagesID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProportiesImagesID], [
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
            'ProportiesImagesID',
            'PropertiesID',
            'ImagesID',
        ],
    ]) ?>

</div>
