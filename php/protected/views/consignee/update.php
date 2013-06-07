<?php
/* @var $this ConsigneeController */
/* @var $consignee Consignee */

$this->breadcrumbs=array(
	'Consignees'=>array('index'),
	$consignee->id=>array('view','id'=>$consignee->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consignee', 'url'=>array('index')),
	array('label'=>'Create Consignee', 'url'=>array('create')),
	array('label'=>'View Consignee', 'url'=>array('view', 'id'=>$consignee->id)),
	array('label'=>'Manage Consignee', 'url'=>array('admin')),
);
?>

<h1>Update Consignee <?php echo $consignee->id; ?></h1>

<?php echo $this->renderPartial('_form', array('consignee'=>$consignee, 'company'=>$consignee->company)); ?>