<?php
/** @var $this \yii\web\View */
/** @var $q string */
/** @var $route string */
/** @var $category \app\modules\store\models\Category */
/** @var $products \app\modules\store\models\Product[] */
use yii\helpers\Url;
use app\modules\store\models\Category;
use app\modules\store\models\Manufacturer;
$this->title = $title;
$theme =  $this->theme;
\app\modules\store\assets\BasketAsset::register($this);
?>
<div class="title ">
    <a href="<?=Url::to(Category::getFirstLink())?>" class="fl_l <?php if($route == 'store/category/view') echo 'active'?>">Работа с каталогом ветснаб</a>
    <a href="<?=Url::to(Manufacturer::getFirstLink())?>" class="fl_r <?php if($route == 'store/category/brand') echo 'active'?>">Работа с каталогом производителей</a>
</div>
<div class="korzina_zakaz">
    <div class="korzina">
        <img src="<?=$theme->getUrl('img/korzina.jpg')?>" alt="Корзина"/>
        <span>Товаров выбрано <b><var class="_basket-count">0</var> шт</b></span>
    </div>
    <div class="search">
        <?=\yii\helpers\Html::beginForm('','get')?>
            <input name="q" maxlength="200" type="search" class="si _search" placeholder="Поиск..." value="<?=$q?>"/>
            <a href="#modal2" class="open_modal">ЗАКАЗАТЬ</a>
        <?=\yii\helpers\Html::endForm()?>
    </div>
</div>
<div class="product">
    <div class="title rel">
        <h2><?=$category->title?></h2>
    </div>
    <ul class="pord_spisok _product-list">
        <?php foreach($products as $product):?>
        <li class="_product-item" data-product-id="<?=$product->id?>">
            <div class="opisanie">
                <div class="img_pr">
                    <img src="<?= $product->image->resize('84x84') ?>" alt=""/>
                </div>
								<span class="name_pr">
									<?=$product->title?>
								</span>
								<span class="proizvoditel_pr">
									Производитель: <?=$product->manufacturer->title?>
								</span>
								<span class="min_zakaz">
									 Минимальный заказ: <?=$product->minCount?> шт
								</span>
                <a href="" class="spoiler_links">Подробнее<div class="podr_img"><img  src="<?=$theme->getUrl('img/prodrobnee.png')?>"/></div> </a>
                <div class="spoiler_body">
                    <?=$product->content?>
                    <a  class="skrit" onclick=$("div[class^='spoiler_body']").hide('normal')>скрыть</a>
                </div>
            </div>
            <div class="kolichestvo">
                <span>Количество</span>
                <div class="shtuk">
                    <a href="#" class="minus" onclick="Basket.minus(this,<?=$product->minCount?>);return false"><b>-</b></a>
                    <span><b><input type="text" name="comment" size="5" value="<?=$product->minCount?>" readonly class="_counter-value"/></b></span>
                    <a  href=""class= "plus " onclick="Basket.plus(this);return false"><b>+</b></a>шт
                </div>

                <form>
                    <label class="vibor"> Выбрать<input type="checkbox" onclick="Basket.select()" class="_product-checkbox"/></label>
                </form>
            </div>
        </li>
        <?php endforeach?>
    </ul>
    <div class="korzina_zakaz">

        <div class="korzina">
            <img src="<?=$theme->getUrl('img/korzina.jpg')?>" alt="Корзина"/>
            <span>Товаров выбрано <b><var class="_basket-count">0</var> шт</b></span>
        </div>
        <div class="search">
            <a href="#modal2" class="open_modal">ЗАКАЗАТЬ</a>
        </div>
    </div>
</div>