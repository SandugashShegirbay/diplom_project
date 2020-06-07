<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UniversSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="univers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'spec') ?>

    <?= $form->field($model, 'region') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'students') ?>

    <?php // echo $form->field($model, 'sthouse') ?>

    <?php // echo $form->field($model, 'grants') ?>

    <?php // echo $form->field($model, 'accr') ?>

    <?php // echo $form->field($model, 'cat_id') ?>

    <?php // echo $form->field($model, 'spec_id') ?>

    <?php // echo $form->field($model, 'reg_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
