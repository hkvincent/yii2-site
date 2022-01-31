<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersImages */

$this->title = 'Create Users Images';
$this->params['breadcrumbs'][] = ['label' => 'Users Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
