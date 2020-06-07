<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Carousel;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Univers;
use frontend\models\Cafedra;
use yii\widgets\LinkPager;
	$k = 0;
?>
<?php foreach ($univers as $item) { 
	$catname = Category::find()->where(['id'=>$item->cat_id])->one();
	$specname = Spec::find()->where(['id'=>$item->spec_id])->one();
	$regname = Regions::find()->where(['id'=>$item->reg_id])->one();
	if($price_ot != 0 && $price_do != 0){
		if($item->price >= $price_ot && $item->price <= $price_do){
			$k++;
?>
<div class="col-xs-12 univer mb25">
	<div class="col-xs-3 p0">
		<img src="/backend/web/<?=$item->img?>" alt="" class="unimg"> 
	</div>
	<div class="col-xs-9 paddleftr">
		<?=Html::a($item->name,'/site/univer?id='.$item->id,['class'=>'unname'])?>
		<h4 class="undann"><b>Категория:</b> <?=$catname->name?></h4>
		<h4 class="undann"><b>Специализация:</b> <?=$specname->name?></h4>
		<h4 class="undann"><b>Общежитие:</b> <?php if($item->sthouse == 1) echo 'Имеется'; else echo 'Не имеется'; ?></h4>
		<?=Html::a('<button class="fullinf barys">Подробнее <span class="
glyphicon glyphicon-chevron-right"></span></button>','/site/univer?id='.$item->id,['class'=>'unname'])?>
	</div>
</div>
	<?php } ?>
	<?php }else
	if($price_ot != 0 && $price_do == 0){
		if($item->price >= $price_ot){
			$k++;
	?>
<div class="col-xs-12 univer mb25">
	<div class="col-xs-3 p0">
		<img src="/backend/web/<?=$item->img?>" alt="" class="unimg"> 
	</div>
	<div class="col-xs-9 paddleftr">
		<?=Html::a($item->name,'/site/univer?id='.$item->id,['class'=>'unname'])?>
		<h4 class="undann"><b>Категория:</b> <?=$catname->name?></h4>
		<h4 class="undann"><b>Специализация:</b> <?=$specname->name?></h4>
		<h4 class="undann"><b>Общежитие:</b> <?php if($item->sthouse == 1) echo 'Имеется'; else echo 'Не имеется'; ?></h4>
		<?=Html::a('<button class="fullinf barys">Подробнее <span class="
glyphicon glyphicon-chevron-right"></span></button>','/site/univer?id='.$item->id,['class'=>'unname'])?>
	</div>
</div>
	<?php

		}
	}else 
	if($price_ot == 0 && $price_do != 0){
		if($item->price <= $price_do){
			$k++;
	?>
<div class="col-xs-12 univer mb25">
	<div class="col-xs-3 p0">
		<img src="/backend/web/<?=$item->img?>" alt="" class="unimg"> 
	</div>
	<div class="col-xs-9 paddleftr">
		<?=Html::a($item->name,'/site/univer?id='.$item->id,['class'=>'unname'])?>
		<h4 class="undann"><b>Категория:</b> <?=$catname->name?></h4>
		<h4 class="undann"><b>Специализация:</b> <?=$specname->name?></h4>
		<h4 class="undann"><b>Общежитие:</b> <?php if($item->sthouse == 1) echo 'Имеется'; else echo 'Не имеется'; ?></h4>
		<?=Html::a('<button class="fullinf barys">Подробнее <span class="
glyphicon glyphicon-chevron-right"></span></button>','/site/univer?id='.$item->id,['class'=>'unname'])?>
	</div>
</div>
	<?php
		}
	}else
	if($price_ot == 0 && $price_do == 0){
			$k++;
?>
<div class="col-xs-12 univer mb25">
	<div class="col-xs-3 p0">
		<img src="/backend/web/<?=$item->img?>" alt="" class="unimg"> 
	</div>
	<div class="col-xs-9 paddleftr">
		<?=Html::a($item->name,'/site/univer?id='.$item->id,['class'=>'unname'])?>
		<h4 class="undann"><b>Категория:</b> <?=$catname->name?></h4>
		<h4 class="undann"><b>Специализация:</b> <?=$specname->name?></h4>
		<h4 class="undann"><b>Общежитие:</b> <?php if($item->sthouse == 1) echo 'Имеется'; else echo 'Не имеется'; ?></h4>
		<?=Html::a('<button class="fullinf barys">Подробнее <span class="
glyphicon glyphicon-chevron-right"></span></button>','/site/univer?id='.$item->id,['class'=>'unname'])?>
	</div>
</div>
<?php
	}
	?>
<?php } ?>
<input type="hidden" value="<?=$k?>" id="univers_count">
