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
    <img src="<?=$theme->getUrl('img/glavnaia_photo.jpg')?>"/>
    <p>Компания «Асыл Кокше Зооветснаб» является эксклюзивным дистрибьютором в Казахстане хорошо известных европейских производителей ветпрепаратов – Лабораториос Овехеро (Испания), Биовет Дрвалев (Польша), Минитюб (Германия), Берингер Ингельхайм (Германия), Zoetis (Pfizer) США.</p>
	<p>Благодаря нашему сотрудничеству с этими компаниями, мы имеем возможность предлагать Казахстанским животноводам качественные и эффективные препараты по конкурентным ценам.
	</p>
	<p>Асыл Кокше Зооветснаб современное и динамично развивающееся предприятие, основными критериями, деятельности которого является:</p>
	<ul class="ul">
	<li>Поставки эффективной и качественной ветеринарной продукции от известных европейских брендов, непосредственно казахстанскому производителю животноводческой продукции.</li>
	<li>Высокий уровень изучения предпочтений рынка. *Индивидуальный подход в решении ветеринарных проблем, в зависимости от технологических особенностей и эпизоотической ситуации Вашего предприятия.</li>
	<li>Гибкая система условий сотрудничества для постоянных клиентов.</li>
	<li>Оказание консультативных услуг хозяйствам ведущими ветеринарными специалистами, имеющими большой опыт работы с продукцией компании.
	Проведение семинаров и тренингов для специалистов хозяйств с привлечением зарубежных партнеров.</li>
	</ul>
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
                <a href="<?= $item->path ?>"><span class="a_heading"><?= $item->title ?></span></a>
                <div class="slid_txt">       
                        <?=$item->shortext(300)?>
                </div>
                <a href="<?= $item->path ?>">Подробнее...</a>
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
        <div class="item">
            <a href="<?= $item->path ?>">
            <img src="<?=$item->imageSrc('201x141')?>" alt="Owl Image">
                </a>
        </div>
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
                <a href="<?= $item->path ?>"><span class="a_heading"><?=$item->title?></span></a>
                <div class="slid_txt">
                    <?=$item->shortext(300)?>
                </div>
                <a class="etc_a" href="<?= $item->path ?>">Подробнее...</a>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>
<?php endif?>