<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Cafedra;

/* @var $this yii\web\View */
/* @var $model frontend\models\Univers */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="/backend//web/js/ckeditor.js"></script>
<div class="univers-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-12">
        <div class="col-xs-12">
            <?= $form->field($model, 'title')->textInput() ?>
            <?= $form->field($model, 'name')->textInput() ?>
        </div>
    </div>
<div class="col-xs-12 p0">
    <div class="col-xs-4">
        <?= $form->field($model, 'cat_id')->dropDownList(Category::dropdown()) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'caf_id')->dropDownList(Cafedra::dropdown(),['onchange'=>'setspec()']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'spec_id')->dropDownList(Spec::dropdown()) ?>
    </div>
</div>
<div class="col-xs-12">
    <div class="col-xs-4">
        <?= $form->field($model, 'price')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'students')->textInput(['type'=>'number']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'sthouse')->dropDownList(['1'=>'Имеется','2'=>'Не имеется']) ?>
    </div>
</div>
<div class="col-xs-12">
    <div class="col-xs-4">
        <?= $form->field($model, 'grants')->dropDownList(['Государственный'=>'Государственный','Внутренний'=>' Внутренний']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'accr')->dropDownList(['1'=>'Государственный ВУЗ','2'=>'Негосударственный ВУЗ']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'ssilka')->textInput() ?>
    </div>
</div>
<div class="col-xs-12">
    <div class="col-xs-4">
        <?= $form->field($model, 'reg_id')->dropDownList(Regions::dropdown()) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'times')->textInput() ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'money')->textInput(['type'=>'number']) ?>
    </div>
</div>
<div class="col-xs-12">
    <div class="col-xs-12">
        <?= $form->field($model, 'file_img')->fileInput() ?>
        <?= $form->field($model, 'inform')->textarea(['rows'=>'10','id'=>'editor']) ?>
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
<script>
    ClassicEditor.create( document.querySelector('#editor'))
        .catch( error => {
            console.error('error');
        });
    function setspec(){
        var caf_id = $("#univers-caf_id").val();
        $.ajax({
            url: '/admin/univers/setspec',
            type:'POST',
            data: {'caf_id':caf_id},
            success: function (html){
                $("#univers-spec_id").html(html);
            },
            error: function(){
                alert('error');
            }
        });
    }
</script>