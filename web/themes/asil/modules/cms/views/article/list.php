<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article
 * @var $items \app\modules\cms\models\Article[]
 */
$this->title = $item->typeView;
?>

<div class="title rel">
    <h2><?=$this->title?></h2>
</div>
<div class="text">
    <ul  class="statii">
        <?php foreach($items as $item):?>
        <li>
            <div class="slid_one">
                <div class="img_slid">
                    <img src="<?=$item->image->resize('208x145')?>"/>
                </div>
                <div class="title_stati"><?=$item->title?></div>
                <span class="date"><?=\Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
                <div class="slid_txt">
                    <p><?=$item->shortext(100)?></p>
                </div>
                <a href="<?=$item->path?>">Подробнее...</a>
            </div>
        </li>
        <?php endforeach?>
    </ul>

</div>