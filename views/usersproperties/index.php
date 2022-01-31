<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersPropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Properties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-properties-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users Properties', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UsersPropertiesID',
            'UsersID',
            'PropertiesID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
