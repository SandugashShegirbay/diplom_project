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

$this->title = 'Вузы и гранты';
?>
<div class="col-xs-12 p0 p50px mb50">
	<div class="container">
		<div class="col-xs-12 p0 mb25">
			<button class="circleblue"></button>
			<h4 class="titletxt">
				Вузы и гранты
			</h4>
		</div>
		<div class="col-xs-12 p25 wh box_shadow">
			<div class="col-xs-12 p0 mb25">
				<div class="col-xs-3 p0">
					<label for="category" class="lab_sell">Категории</label>
					<select name="category" id="category" class="selectss" onchange="setvarcat()">
						<option value="0">Выбрать все</option>
						<?php
						$category = Category::find()->all();
						foreach ($category as $item) {
						?>
						<option value="<?=$item->id?>" <?php if($item->id == $cats) echo 'selected';?>><?=$item->name?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="col-xs-3 p0">
					<label for="cafedra" class="lab_sell">Факультет</label>
					<select name="cafedra" id="cafedra" class="selectss" value="<?=$regs?>" onchange="setspec()">
						<option value="0">Выбрать все</option>
						<?php
						$cafedra = Cafedra::find()->all();
						foreach ($cafedra as $item) {
						?>
						<option value="<?=$item->id?>"><?=$item->name?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="col-xs-3 p0">
					<label for="spec" class="lab_sell">Специализации</label>
					<select name="spec" id="spec" class="selectss" onchange="selectdisp()">
						<option value="0">Выбрать все</option>
						<?php
						$spec = Spec::find()->all();
						foreach ($spec as $item) {
						?>
						<option value="<?=$item->id?>"><?=$item->name?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="col-xs-3 p0">
					<label for="regions" class="lab_sell">Город</label>
					<select name="regions" id="regions" class="selectss" onchange="setregionvar()">
						<option value="0">Выбрать все</option>
						<?php
						$regions = Regions::find()->all();
						foreach ($regions as $item) {
						?>
						<option value="<?=$item->id?>" <?php if($item->id == $regs) echo 'selected';?>><?=$item->name?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-xs-12 p0 mb25">
				<div class="col-xs-6"></div>
				<div class="col-xs-6 p0">
					<div class="col-xs-6 p0">
						<label for="otskolki" class="lab_sell">Цена от:</label>
						<input type="number" class="senyfiltr" value="" id="otskolki" placeholder="от" oninput="setregionvar()">
					</div>
					<div class="col-xs-6 p0">
						<label for="doskolki" class="lab_sell">Цена до:</label>
						<input type="number" class="senyfiltr" id="doskolki" placeholder="до" oninput="setregionvar()">
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-xs-12 p0 mb25">
				<h4 class="ti_txt" id="setcountuni">
					<?php if($cnt == 0) echo 'Ничего не найдено'; else ?>
					<?php if($cnt == 1) echo 'Найден'; else echo 'Найдено';?> <?=$cnt?> <?php if($cnt == 1) echo 'вариант'; else if($cnt == 2 || $cnt == 3) echo 'варианта'; else echo 'вариантов'; ?>
				</h4>
			</div>
			<div class="col-xs-12 p0" id="variants">
				<?php foreach ($univers as $item) { 
					$catname = Category::find()->where(['id'=>$item->cat_id])->one();
					$specname = Spec::find()->where(['id'=>$item->spec_id])->one();
					$regname = Regions::find()->where(['id'=>$item->reg_id])->one();
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
			</div>
			<div class="col-xs-12 p0">
	                <?php
	                    echo LinkPager::widget([
	                        'pagination' => $pagination,
	                    ]);
	                ?>
	        </div>
		</div>
	</div>
</div>
<script>
	function setspec(){
		var val = $("#cafedra").val();
		var spec_id = $("#spec").val();
		var cat_id = $("#category").val();
		var caf_id = $("#cafedra").val();
		var reg_id = $("#regions").val();
		var price_ot = $("#otskolki").val();
		var price_do = $("#doskolki").val();
		$.ajax({
	        url: '/site/changespec',
	        type:'POST',
	        data: {'val':val},
	        success: function (html){
	        	$("#spec").html(html);
	        	var cat_id = $("#category").val();
	        	$.ajax({
			        url: '/site/setvarregion',
			        type:'POST',
			        data: {'spec_id':spec_id,'cat_id':cat_id,'caf_id':caf_id,'reg_id':reg_id,'price_ot':price_ot,'price_do':price_do},
			        success: function (content){
			        	$("#variants").html(content);
			        	var countuniver = parseInt($("#univers_count").val());
			        	var text = '';
			        	if(countuniver == 0){text = 'Ничего не найдено';}else
			        	if(countuniver == 1){text = 'Найден 1 вариант'}else
			        	if(countuniver == 2 || countuniver == 3 || countuniver == 4){
			        		text = 'Найдено '+countuniver+' варианта';
			        	}else{
			        		text = 'Найдено '+countuniver+' варианотов';
			        	}
			        	$("#setcountuni").html(text);
			        },
			        error: function(){
			        	alert('error');
			        }
			    });
	        },
	        error: function(){
	        	alert('error');
	        }
	    });
	}

	function setvarcat(){
		var spec_id = $("#spec").val();
		var cat_id = $("#category").val();
		var caf_id = $("#cafedra").val();
		var reg_id = $("#regions").val();
		var price_ot = $("#otskolki").val();
		var price_do = $("#doskolki").val();
		$.ajax({
	        url: '/site/setvarregion',
	        type:'POST',
	        data: {'spec_id':spec_id,'cat_id':cat_id,'caf_id':caf_id,'reg_id':reg_id,'price_ot':price_ot,'price_do':price_do},
	        success: function (content){
	        	$("#variants").html(content);
	        	var countuniver = parseInt($("#univers_count").val());
	        	var text = '';
	        	if(countuniver == 0){text = 'Ничего не найдено';}else
	        	if(countuniver == 1){text = 'Найден 1 вариант'}else
	        	if(countuniver == 2 || countuniver == 3 || countuniver == 4){
	        		text = 'Найдено '+countuniver+' варианта';
	        	}else{
	        		text = 'Найдено '+countuniver+' варианотов';
	        	}
	        	$("#setcountuni").html(text);
	        },
	        error: function(){
	        	alert('error');
	        }
	    });
	}

	function selectdisp(){
		var spec_id = $("#spec").val();
		var cat_id = $("#category").val();
		var caf_id = $("#cafedra").val();
		var reg_id = $("#regions").val();
		var price_ot = $("#otskolki").val();
		var price_do = $("#doskolki").val();
		$.ajax({
	        url: '/site/setvarregion',
	        type:'POST',
	        data: {'spec_id':spec_id,'cat_id':cat_id,'caf_id':caf_id,'reg_id':reg_id,'price_ot':price_ot,'price_do':price_do},

	        success: function (content){
	        	$("#variants").html(content);
	        	var countuniver = parseInt($("#univers_count").val());
	        	var text = '';
	        	if(countuniver == 0){text = 'Ничего не найдено';}else
	        	if(countuniver == 1){text = 'Найден 1 вариант'}else
	        	if(countuniver == 2 || countuniver == 3 || countuniver == 4){
	        		text = 'Найдено '+countuniver+' варианта';
	        	}else{
	        		text = 'Найдено '+countuniver+' варианотов';
	        	}
	        	$("#setcountuni").html(text);
	        },
	        error: function(){
	        	alert('error');
	        }
	    });
	}

	function setregionvar(){
		var spec_id = $("#spec").val();
		var cat_id = $("#category").val();
		var caf_id = $("#cafedra").val();
		var reg_id = $("#regions").val();
		var price_ot = $("#otskolki").val();
		var price_do = $("#doskolki").val();
		if(!price_ot){
			price_ot = 0;
		}
		if(!price_do){
			price_do = 0;
		}
		$.ajax({
	        url: '/site/setvarregion',
	        type:'POST',
	        data: {'spec_id':spec_id,'cat_id':cat_id,'caf_id':caf_id,'reg_id':reg_id,'price_ot':price_ot,'price_do':price_do},
	        success: function (content){
	        	$("#variants").html(content);
	        	var countuniver = parseInt($("#univers_count").val());
	        	var text = '';
	        	if(countuniver == 0){text = 'Ничего не найдено';}else
	        	if(countuniver == 1){text = 'Найден 1 вариант'}else
	        	if(countuniver == 2 || countuniver == 3 || countuniver == 4){
	        		text = 'Найдено '+countuniver+' варианта';
	        	}else{
	        		text = 'Найдено '+countuniver+' варианотов';
	        	}
	        	$("#setcountuni").html(text);
	        },
	        error: function(){
	        	alert('error');
	        }
	    });
	}
</script>