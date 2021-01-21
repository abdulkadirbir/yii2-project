<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kiraci */

$this->title = 'Create Kiraci';
$this->params['breadcrumbs'][] = ['label' => 'Kiracis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kiraci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
