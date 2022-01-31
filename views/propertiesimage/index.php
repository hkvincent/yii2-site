<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropertiesImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Properties Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Properties Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProportiesImagesID',
            'PropertiesID',
            'ImagesID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
