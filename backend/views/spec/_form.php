<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cafedra;

/* @var $this yii\web\View */
/* @var $model frontend\models\Spec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spec-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'caf_id')->dropDownList(Cafedra::dropdown()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
