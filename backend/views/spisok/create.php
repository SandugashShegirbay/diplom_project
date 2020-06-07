<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Spisok */

$this->title = 'Добавить файл';
$this->params['breadcrumbs'][] = ['label' => 'Список грантов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spisok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
