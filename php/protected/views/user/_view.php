<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
    <?php echo CHtml::encode($data->user_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('date_registered')); ?>:</b>
    <?php echo CHtml::encode($data->date_registered); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('is_admin')); ?>:</b>
    <?php echo CHtml::encode($data->is_admin); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('time_stamp')); ?>:</b>
    <?php echo CHtml::encode($data->time_stamp); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('person_fname')); ?>:</b>
    <?php echo CHtml::encode($data->person->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('person_lname')); ?>:</b>
    <?php echo CHtml::encode($data->person->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('person_phone')); ?>:</b>
    <?php echo CHtml::encode($data->person->phone); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('person_email')); ?>:</b>
    <?php echo CHtml::encode($data->person->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('person_address')); ?>:</b>
    <?php echo CHtml::encode($data->person->address); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
      <?php echo CHtml::encode($data->person_id); ?>
      <br />

     */ ?>

</div>