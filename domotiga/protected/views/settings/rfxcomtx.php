<?php
/* @var $this SettingsRfxcomtxController */
/* @var $model SettingsRfxcomtx */
/* @var $form bootstrap.widgets.TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-rfxcomtx-rfxcomtx-form',
	'type'=>'horizontal',
)); ?>

<fieldset>
<legend>RFXComTX Settings</legend>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->checkBoxRow($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>

		<?php echo $form->dropDownListRow($model,'type', array('serial' => 'serial', 'tcp' => 'tcp')); ?>
		<?php echo $form->error($model,'type'); ?>

		<?php echo $form->textFieldRow($model,'tcphost'); ?>
		<?php echo $form->error($model,'tcphost'); ?>

		<?php echo $form->textFieldRow($model,'tcpport'); ?>
		<?php echo $form->error($model,'tcpport'); ?>

		<?php echo $form->checkBoxRow($model,'relayenabled'); ?>
		<?php echo $form->error($model,'relayenabled'); ?>

		<?php echo $form->textFieldRow($model,'relayport'); ?>
		<?php echo $form->error($model,'relayport'); ?>

		<?php echo $form->textFieldRow($model,'serialport'); ?>
		<?php echo $form->error($model,'serialport'); ?>

		<?php echo $form->dropDownListRow($model,'baudrate', array('9600' => '9600', '19200' => '19200', '38400' => '38400')); ?>
		<?php echo $form->error($model,'baudrate'); ?>

		<?php echo $form->checkBoxRow($model,'disablex10'); ?>
		<?php echo $form->error($model,'disablex10'); ?>

		<?php echo $form->checkBoxRow($model,'enablearc'); ?>
		<?php echo $form->error($model,'enablearc'); ?>

		<?php echo $form->checkBoxRow($model,'enableharrison'); ?>
		<?php echo $form->error($model,'enableharrison'); ?>

		<?php echo $form->checkBoxRow($model,'enablekoppla'); ?>
		<?php echo $form->error($model,'enablekoppla'); ?>

		<?php echo $form->checkBoxRow($model,'rfxmitter'); ?>
		<?php echo $form->error($model,'rfxmitter'); ?>

		<?php echo $form->checkBoxRow($model,'handshake'); ?>
		<?php echo $form->error($model,'handshake'); ?>

		<?php echo $form->checkBoxRow($model,'debug'); ?>
		<?php echo $form->error($model,'debug'); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>