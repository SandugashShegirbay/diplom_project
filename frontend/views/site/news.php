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

$this->title = 'Новости';
?>
<div class="col-xs-12 p0 p50px mb50">
	<div class="container">
		<div class="col-xs-12 p0 mb25">
			<button class="circleblue"></button>
			<h4 class="titletxt">
				Новости
			</h4>
		</div>
		<?php foreach($news as $item){ ?>
		<div class="col-xs-12 p25 wh box_shadow mb25">
			<div class="col-xs-12 p0 mb25">
				<div class="col-xs-8 p0">
					<img src="/backend/web/<?=$item->img?>" alt="" class="news_img">
				</div>
				<div class="col-xs-4">
					<h4 class="new_tt"><?=$item->title?></h4>
					<h4 class="f14px"><?=$item->shdescrip?></h4>
					<a href="/site/newfull?id=<?=$item->id?>"><button class="barys podbf_news">Подробнее</button></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<style>
			.descriptionxxw<?=$item->id?>{
			    display: none;
			}
		</style>
		<?php } ?> 
	</div>
</div>