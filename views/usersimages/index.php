<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UsersImagesID',
            'UsersID',
            'ImagesID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
