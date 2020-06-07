<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Carousel;
use frontend\models\News;
$this->title = 'Vuzy.kz - ВУЗы Казахстана';
?>
<div class="col-xs-12 block1">
	<div class="container">
	    <div class="col-xs-12 p0">
	    	<h4 class="btitle">Здесь собрана вся информация <br>о грантах ВУЗ-ов страны</h4>
	    </div>
	    <div class="col-xs-12 p0">
	    	<button class="bluebtn"></button>
	    </div>
	    <div class="col-xs-12 p0">
	    	<h4 class="text_title">
	    		Мы поможем вам найти гранты на интересующую вас<br> специальность в ведущих ВУЗ-ах страны
	    	</h4>
	    </div>
	    <div class="col-xs-12 p0">
	    	<?php $form = ActiveForm::begin(['action'=>'/site/granty']); ?>
	    	<div class="selects">
		    	<select name="cats" id="cats" class="cats barys">
		    		<?php foreach ($category as $item) { ?>
		    			<option value="<?=$item->id?>"><?=$item->name?></option>
		    		<?php } ?>
		    	</select>
		    	<select name="regs" id="regs" class="cats barys">
		    		<?php foreach ($region as $item) { ?>
		    			<option value="<?=$item->id?>"><?=$item->name?></option>
		    		<?php } ?>
		    	</select>
	    	</div>
	    	<button class="barys search">Найти</button>
	    	<?php ActiveForm::end();?>
	    </div>
    </div>
</div>
<div class="col-xs-12 block2">
	<div class="container">
		<div class="col-xs-12 p0">
			<h4 class="txyutx">Новости</h4>
		</div>
		<div class="col-xs-12 p0 mb25">
	    	<button class="bluebtn"></button>
	    </div>
		<div class="col-xs-12 p0">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				   <a class="carousel-control-prev sadxc2" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="carousel-control-next sadxc22" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
	              <div class="carousel-inner">
	                <div class="item active">
	                	<?php $news1 = News::find()->where(['id'=>$array[1]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[1]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news1->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news1->title?></p>
	                        </div>
	                    </div></a>
	                    <?php $news2 = News::find()->where(['id'=>$array[2]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[2]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news2->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news2->title?></p>
	                        </div>
	                    </div></a>
	                    <?php $news3 = News::find()->where(['id'=>$array[3]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[3]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news3->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news3->title?></p>
	                        </div>
	                    </div></a>
	                    <div class="clear"></div>
	                </div>

	                <div class="item">
	                  	<?php $news4 = News::find()->where(['id'=>$array[4]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[4]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news4->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news4->title?></p>
	                        </div>
	                    </div></a>
	                    <?php $news5 = News::find()->where(['id'=>$array[5]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[5]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news5->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news5->title?></p>
	                        </div>
	                    </div></a>
	                    <?php $news6 = News::find()->where(['id'=>$array[6]])->one(); ?>
	                    <a href="/site/newfull?id=<?=$array[6]?>"><div class="col-xs-4 comentaries w680_bL_100">
	                        <div class="blockcol col-lg-12 p25 col-md-12 col-sm-12 col-xs-12">
	                            <img src="/backend/web/<?=$news6->img?>" alt="" class="kaznu">
	                            <p class="coment_just"><?=$news6->title?></p>
	                        </div>
	                    </div></a>
	                    <div class="clear"></div>
	                </div>
            	</div>
            	 
            </div>
		</div>
	</div>
</div>