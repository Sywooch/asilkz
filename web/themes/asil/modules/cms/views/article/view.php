<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article
 */
$this->title = $item->title;
$this->params['breadcrumbs']=[
  ['label'=>$item->typeView,'url'=>['/cms/article/list','type'=>$type]],
    $this->title
];
?>
<div class="title rel">
    <h2><?=$item->title?></h2>
    <span><?=\Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
</div>
<div class="text">
    <img src="<?= $item->image->resize('222x141') ?>"/>
    <?=$item->description?>
    <div class="hypercomnnent-block">
        <?=Yii::$app->params['hypercomments']?>
    </div>
</div>