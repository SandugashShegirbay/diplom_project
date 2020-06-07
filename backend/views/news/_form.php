<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="/backend//web/js/ckeditor.js"></script>
<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['id'=>'editor2']) ?>

    <?= $form->field($model, 'shdescrip')->textarea(['rows' => 6]) ?>
	
	<?= $form->field($model, 'img_f')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
	ClassicEditor.create( document.querySelector('#editor2'))
        .catch( error => {
            console.error('error');
        });
</script>