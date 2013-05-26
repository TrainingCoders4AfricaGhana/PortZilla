<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */

$this->breadcrumbs=array(
	'Shippers'=>array('index'),
	$shipper->id=>array('view','id'=>$shipper->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shipper', 'url'=>array('index')),
	array('label'=>'Create Shipper', 'url'=>array('create')),
	array('label'=>'View Shipper', 'url'=>array('view', 'id'=>$shipper->id)),
	array('label'=>'Manage Shipper', 'url'=>array('admin')),
);
?>

<h1>Update Shipper <?php echo $shipper->id; ?></h1>

<?php echo $this->renderPartial('_form', array('shipper'=>$shipper, 'company'=>$shipper->company)); ?>