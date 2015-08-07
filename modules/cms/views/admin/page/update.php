<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cms\models\Page */

$this->title = Yii::t('app', 'Редактировать страницу: ') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
