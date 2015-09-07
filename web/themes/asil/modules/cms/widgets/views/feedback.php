<?php
use \yii\widgets\ActiveForm;
/* @var $model \app\modules\cms\models\form\Feedback */
?>
<!--Модальные окно-->
<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
    <span class="modal_close"></span>
    <span class="title_z">Обратный звонок</span>
    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
        'action'=>['/cms/default/feedback'],
        'fieldConfig' => [
            'template' => '{input}{error}',
            'inputOptions'=>['class'=>'modal_f'],
        ],
    ]) ?>
    <?=$form->field($model,'name')->textInput(['placeholder'=>'Имя...'])?>
    <?=$form->field($model,'phone')->textInput(['placeholder'=>'Номер...'])?>
        <button type="submit" name="submit1">Обратный Звонок</button>
    <?php ActiveForm::end()?>
</div>
<!-- Подложка, одна на всю страницу -->