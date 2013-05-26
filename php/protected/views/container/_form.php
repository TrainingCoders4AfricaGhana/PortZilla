<?php
/* @var $this ContainerController */
/* @var $model Container */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'container-form',
        'enableAjaxValidation' => false,
    ));
    ?>


    <div class="row-fluid">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="span5">

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'weight'); ?>
                <?php echo $form->textField($model, 'weight'); ?>
                <?php echo $form->error($model, 'weight'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'height'); ?>
                <?php echo $form->textField($model, 'height'); ?>
                <?php echo $form->error($model, 'height'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'length'); ?>
                <?php echo $form->textField($model, 'length'); ?>
                <?php echo $form->error($model, 'length'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'type'); ?>
                <?php echo $form->dropDownList($model,'type', Container::model()->getTypeOptions()); ?>
                <?php echo $form->error($model, 'type'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'vessel_id'); ?>
                <?php echo $form->dropDownList($model, 'vessel_id', Vessel::model()->getAllvessels()); ?>
                <?php echo $form->error($model, 'vessel_id'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'identification_code'); ?>
                <?php echo $form->textField($model, 'identification_code', array('size' => 30, 'maxlength' => 30)); ?>
                <?php echo $form->error($model, 'identification_code'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->