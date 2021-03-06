<?php
/* @var $this ActionsController */
/* @var $model Controllers */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'actions-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<fieldset>
<p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.') ?></p>

		<?php echo $form->textFieldControlGroup($model,'name'); ?>
		<?php echo $form->textFieldControlGroup($model,'description',array('class'=>'span5')); ?>
		<?php echo $form->dropDownListControlGroup($model,'type', $model->getAllActionTypes(), array('prompt'=>'', 'id'=>'type')); ?>
		<?php echo $form->textFieldControlGroup($model,'param1'); ?>
		<?php echo $form->textFieldControlGroup($model,'param2'); ?>
		<?php echo $form->textFieldControlGroup($model,'param3'); ?>
		<?php echo $form->textFieldControlGroup($model,'param4'); ?>
		<?php echo $form->textFieldControlGroup($model,'param5'); ?>
</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton('Reset'),
)); ?>
<?php $this->endWidget(); ?>
