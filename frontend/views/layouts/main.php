<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="col-xs-12 header ffcx">
        <div class="container">
            <div class="col-xs-2 p0">
                <a href="/" class="logos">
                    Vuzy.<span class="clr_d">kz</span>
                </a>
            </div>
            <div class="col-xs-7 p0">
                <ul class="menu">
                    <li class="men_it"><a class="rtui" href="/site/granty">Вузы и гранты</a></li>
                    <li class="men_it"><a class="rtui" href="/site/spisok">Список грантов</a></li>
                    <li class="men_it"><a class="rtui" href="/site/news">Новости</a></li>
                </ul>
            </div>
            <div class="col-xs-3 p0">
                <div class="authbl">
                <?php
                if(Yii::$app->user->isGuest){
                ?>
                    <a href="/site/login" class="auth_it clrbl_b">Вход</a>
                    <span class="auth_it">/</span>
                    <a href="/site/signup" class="auth_it ">Регистрация</a>
                <?php
                }else{
                    $user = User::find()->where(['id'=>Yii::$app->user->id])->one();
                ?>
                    <?=Html::a('<h4 class="username">
                        <span class="glyphicon glyphicon-user glph"></span>'.
                        $user->username.'</h4>','/site/cabinet',['class'=>'txtdcnone dty'])?>
                    <span class="flotpal">/</span>
                    <a href="/site/logout" class="logout">Выйти</a>
                <?php
                }
                ?>
                </div>    
            </div>
        </div>
    </div>
    <?= $content ?>
</div>

<div class="col-xs-12 footers">
    <div class="container">
        <div class="col-xs-12 p0">
            <div class="col-xs-4 p0">
                <a href="/" class="foot_logo">Vuzy.kz</a>
            </div>
            <div class="col-xs-4">
                <h4 class="foottxt"><span class="glyphicon glyphicon-copyright-mark" style="margin-right: 15px;"></span>Все права защищены - <?=date('Y')?></h4>
            </div>
            <div class="col-xs-4">
                <div class="socials">
                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
                    <div class="uSocial-Share" data-pid="6779538930b731f9db00325c5fa45f07" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size32,eachCounter0,counter0" data-social="vk,fb,twi,ok,telegram" data-mobile="vi,wa,sms"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
