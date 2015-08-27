<?php
/* @var $this yii\web\View */
/* @var $accessToken yii\authclient\OAuthToken */
use yii\helpers\Url;
$theme = $this->theme;
$this->title = Yii::$app->name;
?>
<div class="title rel">
    <h2>О компании</h2>
</div>
<div class="text">
    <img src="<?=$theme->getUrl('img/opt.jpg')?>"/>
    <p>Компания «Асыл Кокше Зооветснаб» является эксклюзивным дистрибьютором в Казахстане хорошо известных европейских производителей ветпрепаратов – Лабораториос Овехеро (Испания), Биовет Дрвалев (Польша), Минитюб (Германия), Берингер Ингельхайм (Германия), Zoetis (Pfizer) США.</p>
	<p>Благодаря нашему сотрудничеству с этими компаниями, мы имеем возможность предлагать Казахстанским животноводам качественные и эффективные препараты по конкурентным ценам.
	</p>
	<a class="etc" href="/page/o-kompanii">Подробнее</a>
</div>
<?php if( ($items =  \app\modules\cms\models\Article::getAllByCategory('article')) ):?>
<div class="title rel">
    <h2>Статьи и публикации</h2>
</div>
<div class="text">
    <div id="owl-demo" class="owl-carousel">
        <?php foreach($items as $item):?>
        <div class="item">
            <div class="slid_one">
                <div class="img_slid">
                    <img src="<?=$item->imageSrc('133x93')?>">
                </div>
                <span class="date"><?=Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
                <div class="slid_txt">
                    <p>
                        <?=$item->shortext(300)?>
                    </p>
                </div>
                <a href="<?=Url::to(['/cms/article/view','type'=>'article','alias'=>$item->alias])?>">Подробнее...</a>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>
<?php endif?>

<?php if( ($items =  \app\modules\cms\models\Article::getAllByCategory('stock')) ):?>
<div class="title rel">
    <h2>Акции</h2>
</div>
<div class="text">
    <?php foreach($items as $item):?>
    <div id="owl-demo2" class="owl-carousel akcii">
        <div class="item"><img src="<?=$item->imageSrc('201x141')?>" alt="Owl Image"></div>
        <?php endforeach?>
    </div>
</div>
<?php endif?>


<?php if( ($items =  \app\modules\cms\models\Article::getAllByCategory('news')) ):?>
<div class="title rel">
    <h2>Новости</h2>
</div>
<div class="text">
    <div id="owl-demo3" class="owl-carousel">
        <?php foreach($items as $item):?>
        <div class="item">
            <div class="slid_one">
                <div class="img_slid">
                    <img src="<?=$item->imageSrc('139x97')?>">
                </div>
                <span class="date"><?=Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
                <div class="slid_txt">
                    <p><?=$item->shortext(300)?></p>
                </div>
                <a href="<?=Url::to(['/cms/article/view','type'=>'news','alias'=>$item->alias])?>">Подробнее...</a>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>
<?php endif?>