<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UniversSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Университеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="univers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить университет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'title:ntext',
            'name:ntext',
            'price',
            //'students',
            //'sthouse',
            'grants:ntext',
            'accr:ntext',
            //'cat_id',
            //'spec_id',
            //'reg_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
