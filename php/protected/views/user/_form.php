<?php
/* @var $this UserController */
/* @var $user User */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
    ));
    ?>



    <?php echo $form->errorSummary($user); ?>
    <?php echo $form->errorSummary($person); ?>

    <div class="row-fluid">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="span5">
            <div class="row">
                <?php echo $form->labelEx($user, 'user_name'); ?>
                <?php echo $form->textField($user, 'user_name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($user, 'user_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($user, '_password'); ?>
                <?php echo $form->passwordField($user, '_password', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($user, '_password'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($user, '_password_repeat'); ?>
                <?php echo $form->passwordField($user, '_password_repeat', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($user, '_password_repeat'); ?>
            </div>

            <div class="row rememberMe">
                <?php echo $form->labelEx($user, 'is_admin'); ?>
                <?php echo $form->checkBox($user, 'is_admin'); ?>
                <?php echo $form->error($user, 'is_admin'); ?>
            </div>
        </div>
        <div class="span5">            
            <div class="row">
                <?php echo $form->labelEx($person, 'first_name'); ?>
                <?php echo $form->textField($person, 'first_name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($person, 'first_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($person, 'last_name'); ?>
                <?php echo $form->textField($person, 'last_name', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($person, 'last_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($person, 'phone'); ?>
                <?php echo $form->textField($person, 'phone', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($person, 'phone'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($person, 'email'); ?>
                <?php echo $form->textField($person, 'email', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($person, 'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($person, 'address'); ?>
                <?php echo $form->textField($person, 'address', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($person, 'address'); ?>
            </div>
        </div>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($user->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->