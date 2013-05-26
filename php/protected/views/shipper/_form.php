<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'shipper-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="row-fluid">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="span5">

            <?php echo $form->errorSummary($shipper); ?>
            <?php echo $form->errorSummary($company); ?>

            <div class="row">
                <?php echo $form->labelEx($shipper, 'first_name'); ?>
                <?php echo $form->textField($shipper, 'first_name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($shipper, 'first_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($shipper, 'last_name'); ?>
                <?php echo $form->textField($shipper, 'last_name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($shipper, 'last_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'name'); ?>
                <?php echo $form->textField($company, 'name'); ?>
                <?php echo $form->error($company, 'name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'phone'); ?>
                <?php echo $form->textField($company, 'phone'); ?>
                <?php echo $form->error($company, 'phone'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'contact_person'); ?>
                <?php echo $form->textField($company, 'contact_person'); ?>
                <?php echo $form->error($company, 'contact_person'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'city'); ?>
                <?php echo $form->textField($company, 'city'); ?>
                <?php echo $form->error($company, 'city'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'country'); ?>
                <?php echo $form->textField($company, 'country'); ?>
                <?php echo $form->error($company, 'country'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'region'); ?>
                <?php echo $form->textField($company, 'region'); ?>
                <?php echo $form->error($company, 'region'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'address'); ?>
                <?php echo $form->textField($company, 'address'); ?>
                <?php echo $form->error($company, 'address'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($company, 'website'); ?>
                <?php echo $form->textField($company, 'website'); ?>
                <?php echo $form->error($company, 'website'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($shipper->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->