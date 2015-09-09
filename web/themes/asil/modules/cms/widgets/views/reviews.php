<?php
/**
 * @var $this \yii\base\Widget
 * @var $model \app\modules\cms\models\Reviews
 */
use yii\widgets\ActiveForm;
?>
<a href="#modal3" class="open_modal otkrit">Оставить отзыв</a>
<!--Модальные окно-->
<div id="modal3" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
    <span class="modal_close"></span>
    <span class="title_z">Форма отзыва</span>
    <?php $form = ActiveForm::begin([
        'action' => ['/cms/reviews/create'],
        'enableAjaxValidation'=>true,
        'fieldConfig' => [
            'template' => '{input}{error}',
            'inputOptions' => ['class' => 'modal_f'],
        ],
        'options'=>[
            'enctype'=>'multipart/form-data',
        ]
    ]) ?>
   
	<div class="type_file">
		<?= $form->field($model, 'file')->fileInput(['onchange'=>'document.getElementById("fileName").value=this.value']) ?>
		<div class="fonTypeFile"></div>
		<input type="text" class="inputFileVal" readonly="readonly" id="fileName" />
	</div>
    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Имя']) ?>
    <?= $form->field($model, 'age')->textInput(['placeholder' => 'Возраст']) ?>
    <?= $form->field($model, 'company')->textInput(['placeholder' => 'Компания']) ?>
    <?= $form->field($model, 'content')->textarea(['placeholder' => 'Текст отзыва']) ?>
    <button type="submit" name="submit1">Оставить отзыв</button>
    <?php ActiveForm::end() ?>
</div>
<!-- Подложка, одна на всю страницу -->