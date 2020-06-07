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

$this->title = $news->title;
?>
<div class="col-xs-12 p0 p50px mb50">
	<div class="container">
		<div class="col-xs-12 p0 mb25">
			<button class="circleblue"></button>
			<h4 class="titletxt">
				<?=$news->title?>
			</h4>
		</div>
		<div class="col-xs-12 p25 wh box_shadow mb25">
			<div class="col-xs-12 p0 mb25">
				<div class="col-xs-7 p0">
					<img src="/backend/web/<?=$news->img?>" alt="" class="news_img">
				</div>
				<div class="col-xs-5" style="padding:0px 0px 0px 25px;">
					<h4 class="new_tt"><?=$news->title?></h4>
					<h4 class="f14px"><?=$news->shdescrip?></h4>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-xs-12 p0">
				<?=$news->description?>
			</div>
		</div>
	</div>
</div>