<?php
/* @var $this PortController */
/* @var $model Port */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <div class="row-fluid">
	<div class="row span3">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row span3">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row span3">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row span3">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>45,'maxlength'=>45)); ?>
	</div>
        </<div
            
	<div class="row span3">
		<?php echo $form->label($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons offset1">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->