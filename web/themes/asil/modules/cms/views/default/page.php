<?php
/* @var $this \yii\web\View */
/* @var $page \app\modules\cms\models\Page */
$title = $page->title;
$this->title = $title;
$this->params['breadcrumbs'][] = $title;
?>
<?=$page->description?>