<?php
/* @var $this ShipmentController */
/* @var $data Shipment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_date')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departure_date')); ?>:</b>
	<?php echo CHtml::encode($data->departure_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_of_loading')); ?>:</b>
	<?php echo CHtml::encode($data->country_of_loading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_of_discharge')); ?>:</b>
	<?php echo CHtml::encode($data->country_of_discharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commodity')); ?>:</b>
	<?php echo CHtml::encode($data->commodity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bulk_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->bulk_cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('port_id')); ?>:</b>
	<?php echo CHtml::encode($data->port_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('container_id')); ?>:</b>
	<?php echo CHtml::encode($data->container_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipper_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipper_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consignee_id')); ?>:</b>
	<?php echo CHtml::encode($data->consignee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_id')); ?>:</b>
	<?php echo CHtml::encode($data->agent_id); ?>
	<br />

	*/ ?>

</div>