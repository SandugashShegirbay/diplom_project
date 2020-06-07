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
				Список грантов
			</h4>
		</div>
		<div class="col-xs-12 p25 box_shadow wh">
			<iframe src="/backend/web/<?=$spisok->path?>" frameborder="0" class="spisokss"></iframe>
		</div>
	</div>
</div>