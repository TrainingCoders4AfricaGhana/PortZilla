<?php
/* @var $this ShipperController */
/* @var $data Shipper */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->company->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($data->company->phone); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
    <?php echo CHtml::encode($data->company->contact_person); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
    <?php echo CHtml::encode($data->company->city); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
    <?php echo CHtml::encode($data->company->country); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
    <?php echo CHtml::encode($data->company->region); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->company->address); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
    <?php echo CHtml::encode($data->company->website); ?>
    <br />

</div>