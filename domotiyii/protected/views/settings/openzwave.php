<?php
/* @var $this SettingsOpenzwaveController */
/* @var $model SettingsOpenzwave */
/* @var $form bootstrap.widgets.TbActiveForm */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Interfaces') => '../index',
        Yii::t('app','OpenZWave'),
    ),
));

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'settings-openzwave-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<legend>Open-Zwave</legend>
<fieldset>
		<?php echo $form->checkBoxControlGroup($model,'enabled', array('value'=>-1)); ?>
                <?php echo $form->textFieldControlGroup($model,'serialport', array('class'=>'span5')); ?>
                <?php echo $form->dropDownListControlGroup($model,'baudrate', array('9600' => '9600', '19200' => '19200', '38400' => '38400', '57600' => '57600', '115200' => '115200')); ?>
		<?php echo $form->numberFieldControlGroup($model,'polltime', array('append' => 'Seconds')); ?>
		<?php echo $form->checkBoxControlGroup($model,'enablepollsleeping', array('value'=>-1)); ?>
		<?php echo $form->textFieldControlGroup($model,'polltimesleeping'); ?>
		<?php echo $form->checkBoxControlGroup($model,'enablepolllistening', array('value'=>-1)); ?>
		<?php echo $form->textFieldControlGroup($model,'polltimelistening'); ?>
		<?php echo $form->checkBoxControlGroup($model,'enableupdateneighbor', array('value'=>-1)); ?>
		<?php echo $form->checkBoxControlGroup($model,'reloadnodes', array('value'=>-1)); ?>
		<?php echo $form->checkBoxControlGroup($model,'updateneighbor', array('value'=>-1)); ?>
		<?php echo $form->checkBoxControlGroup($model,'debug', array('value'=>-1)); ?>
</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton(Yii::t('app','Submit'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton(Yii::t('app','Reset')),
)); ?>
<?php $this->endWidget(); ?>
