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
    <p>Компания «ВЕТМАРКЕТ» была основана в 1996 году как профессиональная ветеринарная компания, специализирующаяся на продвижении и продажах ветеринарных препаратов, средств гигиены и оборудования, инструментов и приборов для ветеринарии мелких домашних животных.  ООО «ВЕТМАРКЕТ» входит в Группу Компаний «ВИК», которая на ветеринарном рынке уже 25 лет.
        ООО «ВЕТМАРКЕТ» является официальным дистрибьютором Zoetis, MSD Animal Health, GIGI, Хелвет, Астрафарм и др., а также активно занимается продвижением собственной продукции «ВИК - здоровье животных» для домашних питомцев по программе «Подари другу здоровье»  торговой марки «Доктор ВИК», в которую входят препараты для лечения заболеваний опорно-двигательного аппарата животных, противовоспалительные и противопаразитарные средства, препарат для анестезии и эвтаназии животных, профессиональная серия шампуней, бальзамов и кондиционеров - Doctor VIC Professional, наполнители и различные расходные материалы.
        Вся продукция «ВИК - здоровье животных» выпускается на заводах в г. Витебск (РБ) и в г. Белгород (РФ), которые имеют аттестацию производства по европейским стандартам качества GMP. Главный девиз компании - «Европейское качество по Российским ценам». </p>


</div>
<div class="title rel">
    <h2>Вакансии</h2>
</div>
<div class="text">
    <p>Вся продукция «ВИК - здоровье животных» выпускается на заводах в г. Витебск (РБ) и в г. Белгород (РФ), которые имеют аттестацию производства по европейским стандартам качества GMP. Главный девиз компании - «Европейское качество по Российским ценам».  </p>
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
                    <img src="<?=$item->image->resize('133x93')?>">
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
        <div class="item"><img src="<?=$item->image->resize('201x141')?>" alt="Owl Image"></div>
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
                    <img src="<?=$item->image->resize('139x97')?>">
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