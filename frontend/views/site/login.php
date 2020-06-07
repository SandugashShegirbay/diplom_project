<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12 p0 p50px">
    <div class="container">  
		<div class="col-xs-12 p0" style="margin-bottom:50px;">
        <h1 style="text-align: center; margin-top:0px;"><?= Html::encode($this->title) ?></h1>

    <p style="text-align: center;">Пожалуйста, заполните следующие поля для авторизации:</p>

        <div class="block-login wh1 p25 box_shadow">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня') ?>

                <div style="color:#999;margin:1em 0">
                    Если вы забыли пароль: <?= Html::a('Забыли пароль?', ['site/request-password-reset']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
		</div>
    </div>
</div>
