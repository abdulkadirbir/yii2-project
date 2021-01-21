<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EvsahibiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahalledeki Ev Sahibi Olan İnsanlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evsahibi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mahalleye Ev Sahibi Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'soyisim',
            'memleket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
