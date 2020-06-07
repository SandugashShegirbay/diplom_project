<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Carousel;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Univers;
use frontend\models\Selected;

$this->title = $univer->name;
?>
<div class="col-xs-12 p0 p50px mb50">
	<div class="container">
		<div class="col-xs-12 p0 mb25">
			<?=Html::a('<span class="glyphicon glyphicon-chevron-left"></span> Назад в каталог','/site/granty',['class'=>'back'])?>
		</div>
		<div class="col-xs-12 p25 wh box_shadow">
			<div class="col-xs-8 padsdcasc">
				<div class="col-xs-12 p0 mb25">
					<?php
					if(Yii::$app->user->isGuest){
						echo Html::a('<span class="glyphicon glyphicon-star-empty"></span> Добавить в избранное','/site/login',['class'=>'izbr']);
					}else{
					$selected = Selected::find()->where(['user_id'=>Yii::$app->user->id])->andwhere(['univer_id'=>$univer->id])->one();
					if($selected) {
						$class = 'izbrselect';
						$txt = 'Добавлено в избранные';
					}else {
						$class='izbr2';
						$txt = 'Добавить в избранное';
					}
					?>
					<button class="<?=$class?>" onclick="setselected(<?=$univer->id?>)"><span class="glyphicon glyphicon-star-empty"></span> <?=$txt?></button>
					<?php
					}
					?>
				</div>
				<div class="col-xs-12 p0 mb25">
					<h4 class="univername"><?=$univer->title?></h4>
				</div>
				<div class="col-xs-12 p0 inform">
					<?=$univer->inform?>
				</div>
			</div>
			<div class="col-xs-4 p0">
				<div class="col-xs-12 p0 mb25">
					<img src="/backend/web/<?=$univer->img?>" alt="" class="univerimg">
				</div>
				<div class="col-xs-12 p25 blockrght mb25">
					<h4 class="ft14px">Организация</h4>
					<h4 class="ft16px"><?=$univer->name?></h4>
					<h4 class="ft14px">Город</h4>
					<h4 class="ft16px"><?=$region->name?></h4>
					<h4 class="ft14px">Сфера / Дисциплина</h4>
					<h4 class="ft16px"><?=$spec->name?></h4>
					<h4 class="ft14px">Цена на обучение</h4>
					<h4 class="ft16px"><?=$univer->price?> тенге</h4>
					<a href="https://<?=$univer->ssilka?>" class="txtdcnone"><button class="setweb barys">Перейти на сайт</button></a>
				</div>
				<div class="col-xs-12 blockinfocat p0">
					<div class="col-xs-12 " id="showinform" onclick="showit()">
						<h4 class="titld"><?=$category->name?></h4>
						<h4 class="rotait" id="rotait"><span class="glyphicon glyphicon-chevron-down"></span></h4>
					</div>
					<div class="col-xs-12 p25" id="srtc">
						<h4 class="ft14px">Длительность</h4>
						<h4 class="ft16px"><?=$univer->times?></h4>
						<h4 class="ft14px">Размер стипендии</h4>
						<h4 class="ft16px"><?=$univer->money?> тенге</h4>
						<h4 class="ft14px">Общежитие</h4>
						<h4 class="ft16px"><?php if($univer->sthouse == 1)echo 'Имеется';else echo 'Не имеется'; ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="material-modal">
    <div class="modal fade" id="modelShow" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<h4 class="asdko">Добавлено в избранное</h4>
            </div><!-- /.modal-content -->
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->