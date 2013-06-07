<?php
/* @var $this VesselController */
/* @var $model Vessel */
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
            <?php echo $form->label($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>
    </div>        

    <div class="row buttons span2">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>


    <?php $this->endWidget(); ?>

</div><!-- search-form -->