<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article
 * @var $items \app\modules\cms\models\Article[]
 */
$this->title = $item->typeView;
use yii\widgets\ActiveForm;
?>

<div class="title rel">
    <h2><?=$this->title?></h2>

    <?php if($item->type == \app\modules\cms\models\Article::TYPE_ARTICLE):?>
	<div class="search">
        <?php $form = ActiveForm::begin([
            'action'=>['/cms/article/list','type'=>$type],
            'method'=>'get',
        ])?>
        <?=\yii\helpers\Html::textInput('q',$q,['type'=>'search','placeholder'=>'Поиск...'])?>
        <?php ActiveForm::end()?>
	</div>
    <?php endif?>

</div>
<div class="text">
    <ul  class="statii">
        <?php foreach($items as $row):?>
        <li>
            <div class="slid_one">
                <div class="img_slid">
                    <img src="<?= $row->imageSrc('208x145')?>"/>
                </div>
                <div class="title_stati"><?= $row->title?></div>
                <span class="date"><?=\Yii::$app->formatter->asDate(strtotime($row->dateCreate))?></span>
                <div class="slid_txt">
                    <p><?= $row->shortext(100)?></p>
                </div>
                <a href="<?= $row->path?>">Подробнее...</a>
            </div>
        </li>
        <?php endforeach?>
    </ul>

</div>