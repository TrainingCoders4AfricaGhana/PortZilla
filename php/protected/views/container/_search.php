<?php
/* @var $this ContainerController */
/* @var $model Container */
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
            <?php echo $form->label($model, 'vessel_id'); ?>
            <?php echo $form->dropDownList($model, 'vessel_id', Vessel::model()->getAllvessels()); ?>
        </div>

        <div class="row span3">
            <?php echo $form->label($model, 'identification_code'); ?>
            <?php echo $form->textField($model, 'identification_code', array('size' => 30, 'maxlength' => 30)); ?>
        </div>

        <div class="row buttons span3">
            <?php echo CHtml::submitButton('Search'); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->