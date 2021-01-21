<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Evsahibi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evsahibi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memleket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Ekle', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
