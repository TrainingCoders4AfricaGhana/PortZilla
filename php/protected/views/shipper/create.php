<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */

$this->breadcrumbs=array(
	'Shippers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Shipper', 'url'=>array('index')),
	array('label'=>'Manage Shipper', 'url'=>array('admin')),
);
?>

<h1>Create Shipper</h1>

<?php echo $this->renderPartial('_form', array('shipper'=>$shipper, 'company'=>$company)); ?>