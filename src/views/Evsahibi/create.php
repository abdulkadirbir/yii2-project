<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Evsahibi */

$this->title = 'Create Evsahibi';
$this->params['breadcrumbs'][] = ['label' => 'Evsahibis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evsahibi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
