<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\modules\store\models\Order
 * @var $subject string
 */
$this->title = 'Просмотр заказа №'.$model->id;
?>

<div class="title"><h2>Заказ №<?=$model->id?></h2></div>
<div class="staus_zakaz">
    <p><span>Статус:</span>     <?=$model->statusTitle?></p>
</div>
<div class="title_zakaz">Заказанные товары</div>
<table class="zakaz_table">
    <tfoot>
    <tr>
        <td colspan="3" style="text-align: right;padding-right: 20px">
            Всего: <?=$model->totalCount()?> шт.

        </td>
    </tr>
    </tfoot>
    <thead>
    <tr>
        <td>#</td>
        <td>Наименование</td>
        <td>Кол-во</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($model->items as $i=>$item):?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$item->product->title?></td>
            <td><?=$item->quantity?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>
<div class="save_zakaz">
	<a href="#" class="save_zakaz_s">Сохранить заказ на компьютер</a>
</div>