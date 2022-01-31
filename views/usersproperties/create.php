<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersProperties */

$this->title = 'Create Users Properties';
$this->params['breadcrumbs'][] = ['label' => 'Users Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
