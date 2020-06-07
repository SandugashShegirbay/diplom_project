<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Carousel;
use frontend\models\Category;
use frontend\models\Spec;
use frontend\models\Regions;
use frontend\models\Univers;
use yii\widgets\LinkPager;

$this->title = 'Мой кабинет';
?>
<div class="col-xs-12 p0 p50px mb50">
	<div class="container">
		<div class="col-xs-12 p25 wh box_shadow mb25">
			<div class="col-xs-12 p0 mb25">
				<h4 class="userinfo">Информация о пользователе:</h4>
				<h4 class="userlogin"><b>Логин:</b> <?=$user->username?></h4>
				<h4 class="userlogin"><b>E - mail:</b> <?=$user->email?></h4>
			</div>
			<div class="col-xs-12 p0">
				<h4 class="userinfo">Избранные:</h4>
			</div>
			<?php if(!$selected){?>
			<div class="col-xs-12 p0">
				<h3 class="sd">Ничего не найдено</h3>
			</div>
			<?php } ?>
			<?php foreach ($selected as $item) {
					$univer = Univers::find()->where(['id'=>$item->univer_id])->one();
					$catname = Category::find()->where(['id'=>$univer->cat_id])->one();
					$specname = Spec::find()->where(['id'=>$univer->spec_id])->one();
					$regname = Regions::find()->where(['id'=>$univer->reg_id])->one();
				?>
				<div class="col-xs-12 univer mb25">
					<div class="col-xs-3 p0">
						<img src="/backend/web/<?=$univer->img?>" alt="" class="unimg"> 
					</div>
					<div class="col-xs-9 paddleftr">
						<div class="col-xs-12 p0">
							<?=Html::a($univer->name,'/site/univer?id='.$univer->id,['class'=>'unname'])?>
							<h4 class="undann"><b>Категория:</b> <?=$catname->name?></h4>
							<h4 class="undann"><b>Специализация:</b> <?=$specname->name?></h4>
							<h4 class="undann"><b>Общежитие:</b> <?php if($univer->sthouse == 1) echo 'Имеется'; else echo 'Не имеется'; ?></h4>
						</div>
						<div class="col-xs-12 p0">
							<?=Html::a('<button class="udalit barys">Удалить</button>','/site/univerdelete?id='.$item->id,['class'=>''])?>
							<?=Html::a('<button class="fullinf barys">Подробнее <span class="
glyphicon glyphicon-chevron-right"></span></button>','/site/univer?id='.$univer->id,['class'=>''])?>
						</div>
					</div>
				</div>
				<?php } ?>
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