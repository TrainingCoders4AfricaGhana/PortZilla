<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
    <div class="row-fluid">
        <div class="row span3">
            <?php echo $form->label($shipper, 'first_name'); ?>
            <?php echo $form->textField($shipper, 'first_name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>

        <div class="row span3">
            <?php echo $form->label($shipper, 'last_name'); ?>
            <?php echo $form->textField($shipper, 'last_name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>
    </div>
    <div class="row buttons span3">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->