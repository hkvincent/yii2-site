<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PropertiesImage */

$this->title = 'Create Properties Image';
$this->params['breadcrumbs'][] = ['label' => 'Properties Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
