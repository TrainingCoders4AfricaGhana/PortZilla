<?php
/* @var $this UserController */
/* @var $user User */
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
            <?php echo $form->label($user, 'user_name'); ?>
            <?php echo $form->textField($user, 'user_name', array('size' => 45, 'maxlength' => 45)); ?>
        </div>

        <div class="row span3">
            <?php echo $form->label($user, 'First Name'); ?>
            <?php
            echo $form->textField($user, 'person_fname', array
                ('size' => 10, 'maxlength' => 10));
            ?>
        </div>

        <div class="row span3">
            <?php echo $form->label($user, 'Last Name'); ?>
            <?php
            echo $form->textField($user, 'person_lname', array
                ('size' => 10, 'maxlength' => 10));
            ?>
        </div>

        <div class="row buttons span2">
            <?php echo CHtml::submitButton('Search'); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->