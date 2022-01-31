<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */

$this->title = $model->PropertiesID;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PropertiesID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PropertiesID], [
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
            'PropertiesID',
            'Address1',
            'Address2',
            'Address3',
            'Postcode',
            'Type',
            'Price',
            'Description:ntext',
            'SaleStatus',
            'Created',
            'Updated',
            'Deleted',
        ],
    ]) ?>

        <?= DetailView::widget([
        'model' => $image,
        'attributes' => [
            'ImagePath',
            [
                'attribute'=>'icon',
                'value'=>$image->ImagePath,
                'format'=>['image',['width'=>'100','height'=>'100']]
            ]
        ],
    ]) ?>

</div>
