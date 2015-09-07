<?php
use yii\helpers\Html;
use app\web\themes\asil\AppAsset;
use \yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$theme = $this->theme;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?=\app\modules\cms\widgets\Notice::widget()?>
<div class="page_wrap">
    <header>
        <div class="head ">
            <div class="cr ">
                <div class="top_line">
                    <div class="logo">
                        <a href="/"><img src="<?=$theme->getUrl('img/logo.png')?>" alt="Асыл"/></a>
                    </div>
                    <h1>Втеренарные препараты для здоровья,</br>
                        для продовольствия и для планеты..
                    </h1>

                    <div class="zvonok_open rel">
                        <span>+ 7 (701) 376 70 37</span>
                        <a href="#modal1" class="open_modal"><img src="<?=$theme->getUrl('img/zvonok.png')?>"/></a><!-- ссылка с href="#modal1", откроет окно с  id = modal1-->
                    </div>
                </div>

            </div>
        </div>
        <div class="cr ">
            <div class="menu">
                <ul>
                    <li class="glav"><a href="/">ГЛАВНАЯ </a></li>
                    <li class="comp"><a href="<?=Url::to(['/cms/default/page','path'=>'o-kompanii'])?>">О КОМПАНИИ </a></li>
                    <li class="client"><a href="<?=Url::to(['/cms/default/page','path'=>'optovim-klientam'])?>">ОПТОВЫМ КЛИЕНТАМ </a></li>
                    <li class="akci"><a href="<?=Url::to(['/cms/article/list','type'=>'stock'])?>">АКЦИИ </a></li>
                    <li class="oplata"><a href="<?=Url::to(['/cms/default/page','path'=>'oplata-i-dostavka'])?>">ОПЛАТА И ДОСТАВКА </a></li>
                    <li class="prod"><a href="<?=Url::to(\app\modules\store\models\Category::getFirstLink())?>"> ПРОДУКЦИЯ </a></li>
                    <li class="stat"><a href="<?=Url::to(['/cms/article/list','type'=>'article'])?>"> СТАТЬИ </a></li>
                    <li class="cont"><a href="<?=Url::to(['/cms/default/page','path'=>'kontakti'])?>"> КОНТАКТЫ </a></li>
                </ul>
            </div>
        </div>
    </header>
<div class="content">
    <div class="cr">
        <div class="side_bar">
            <?=\app\modules\store\widgets\CategoryNav::widget()?>

            <?php if( ($items = \app\modules\cms\models\Reviews::getAll()) ):?>
            <h3>Отзывы</h3>

            <div class="slider slider2">
                <div class="sliderContent">
                    <?php foreach($items as $item):?>
                    <div class="item">
                        <img class="foto_otz" src="<?=$item->imageSrc()?>" alt="" />
                        <div class="otzv">
								<span class="name_cl">
									<?=$item->name?>
								</span>
								<span class="years">
									<?=$item->company?>
								</span>
                        </div>
                        <p><?=$item->content?></p>
						<div class="back_otziv">
							<a href="#modal2" class="open_modal otkrit" >Осатвить отзыв</a><!-- ссылка с href="#modal1", откроет окно с  id = modal1-->
						</div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
			<div class="sertifikat">
				<div class="sertifikat_title">
					Сертификаты
				</div>
				<div class="sertifikat_container">
					<div id="wrapper">
						<a class="fancybox" rel="gallery" href="<?=$theme->getUrl('img/blag_pismo_2b.jpg')?>">
							<img src="<?=$theme->getUrl('img/blag_pismo_2m.jpg')?>" alt="" />
						</a>
						<a class="fancybox " rel="gallery" href="<?=$theme->getUrl('img/blag_pismo_3b.jpg')?>">
							<img src="<?=$theme->getUrl('img/blag_pismo_3m.jpg')?>" alt="" />
						</a>
						<a class="fancybox" rel="gallery" href="<?=$theme->getUrl('img/blag_pismo_4b.jpg')?>">
							<img src="<?=$theme->getUrl('img/blag_pismo_4m.jpg')?>" alt="" />
						</a>
						<a class="fancybox " rel="gallery" href="<?=$theme->getUrl('img/blag_pismo_5b.jpg')?>">
							<img src="<?=$theme->getUrl('img/blag_pismo_5m.jpg')?>" alt="" />
						</a>
					</div>
				</div>
			</div>
        </div>
        <?php endif?>

        <div class="content_center ">
            <?=$content?>
        </div>
    </div>
</div>
<footer>
    <div class="cr">
        <div class="footer">
            <div class="logo">
                <a href="/"><img src="<?=$theme->getUrl('img/logo.png')?>" alt="Асыл"/></a>
            </div>
            <div class="foot fl_r">
                <p>Разработано в <a href="astanacreative.kz">AstanaCreative.kz</a></p>
            </div>
        </div>
    </div>
</footer>
    <?=\app\modules\cms\widgets\Feedback::widget()?>
    <?=\app\modules\store\widgets\OrderForm::widget()?>
    <!-- -->
    <!--  скритп модального окна-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>