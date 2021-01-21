<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kiraci */

$this->title = 'Update Kiraci: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kiracis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kiraci-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
