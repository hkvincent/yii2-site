<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Properties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Properties', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PropertiesID',
            'Address1',
            'Address2',
            'Address3',
            'Postcode',
            // 'Type',
            // 'Price',
            // 'Description:ntext',
            // 'SaleStatus',
            // 'Created',
            // 'Updated',
            // 'Deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
