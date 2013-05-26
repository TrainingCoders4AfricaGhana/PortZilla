<?php
/* @var $this AgentController */
/* @var $agent Agent */
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
            <?php echo $form->label($agent, 'first_name'); ?>
            <?php echo $form->textField($agent, 'first_name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>

        <div class="row span3">
            <?php echo $form->label($agent, 'last_name'); ?>
            <?php echo $form->textField($agent, 'last_name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>
    </div>
    <div class="row buttons span3">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->