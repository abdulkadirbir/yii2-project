<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kiraci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kiraci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memleket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Ekle', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
