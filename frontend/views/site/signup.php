<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12 p0 p50px">
    <div class="container">
		<div class="col-xs-12 p0" style="margin-bottom:50px;">
        <h1 style="text-align: center; margin-top:0px;"><?= Html::encode($this->title) ?></h1>

        <p style="text-align: center;">Пожалуйста, заполните следующие поля для регистрации:</p>

            <div class="block-login wh1 p25 box_shadow">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>

                    <?= $form->field($model, 'email')->label('E-mail') ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Зарегистрироватся', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
    </div>
		</div>
</div>
