<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Spisok */

$this->title = 'Изменить файл: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Список грантов ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="spisok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
