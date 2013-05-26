<?php
/* @var $this PortController */
/* @var $model Port */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'port-form',
        'enableAjaxValidation' => false,
    ));
    ?>



    <?php echo $form->errorSummary($model); ?>
    <div class="row-fluid">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="span5">
            <div class="row">
                <?php echo $form->labelEx($model, 'name'); ?>
                <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'address'); ?>
                <?php echo $form->textField($model, 'address', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'address'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'city'); ?>
                <?php echo $form->textField($model, 'city', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'city'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'country'); ?>
                <?php echo $form->textField($model, 'country', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'country'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'region'); ?>
                <?php echo $form->textField($model, 'region', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'region'); ?>
            </div>
            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->