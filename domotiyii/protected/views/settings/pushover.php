<?php
/* @var $this SettingsPushoverController */
/* @var $model SettingsPushover */
/* @var $form CActiveForm */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Modules') => '../index',
        Yii::t('app','Pushover'),
    ),
)); ?>

<legend>Pushover</legend>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
        'htmlOptions'=>array(
                'class'=>''
        )
));
$this->widget('bootstrap.widgets.TbNav', array(
        'type'=>TbHtml::NAV_TYPE_PILLS,
        'items'=>array(
		 array('label'=>Yii::t('app','Send test PushMsg'), 'icon'=>'icon-envelope', 'url'=>Yii::app()->controller->createUrl('sendtestpushover'),'active'=>false, 'linkOptions'=>array()),
                array('label'=>Yii::t('app','Pushover'), 'icon'=>'icon-globe', 'url'=>'https://pushover.net', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>Yii::t('app','Your Pushover'), 'icon'=>'icon-globe', 'url'=>'https://pushover.net/login', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>Yii::t('app','Register'), 'icon'=>'icon-globe', 'url'=>'https://pushover.net/login', 'linkOptions'=>array('target'=>'_blank')),
        ),
));
$this->endWidget();

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-pushover-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<fieldset>
		<?php echo $form->checkBoxControlGroup($model,'enabled', array('value'=>-1)); ?>
		<?php echo $form->textFieldControlGroup($model,'token', array('class'=>'span4')); ?>
		<?php echo $form->textFieldControlGroup($model,'user', array('class'=>'span4')); ?>
		<?php echo $form->textFieldControlGroup($model,'device'); ?>
		<?php echo $form->checkBoxControlGroup($model,'debug', array('value'=>-1, 'help'=>Yii::t('app','To get a free account/API key click \'Register for API\''))); ?>
</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton(Yii::t('app','Submit'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton(Yii::t('app','Reset')),
)); ?>
<?php $this->endWidget(); ?>
