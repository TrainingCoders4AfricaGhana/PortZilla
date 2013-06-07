<?php
/* @var $this ShipmentController */
/* @var $model Shipment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

    <div class="row-fluid">
	<div class="row">
		<?php echo $form->label($model,'country_of_loading'); ?>
		<?php echo $form->textField($model,'country_of_loading',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_of_discharge'); ?>
		<?php echo $form->textField($model,'country_of_discharge',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'port_id'); ?>
		<?php echo $form->textField($model,'port_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'container_id'); ?>
		<?php echo $form->textField($model,'container_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipper_id'); ?>
		<?php echo $form->textField($model,'shipper_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consignee_id'); ?>
		<?php echo $form->textField($model,'consignee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agent_id'); ?>
		<?php echo $form->textField($model,'agent_id'); ?>
	</div>
        </div>
    
	<div class="row buttons span3">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->