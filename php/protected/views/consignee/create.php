<?php
/* @var $this ConsigneeController */
/* @var $consignee Consignee */

$this->breadcrumbs=array(
	'Consignees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consignee', 'url'=>array('index')),
	array('label'=>'Manage Consignee', 'url'=>array('admin')),
);
?>

<h1>Create Consignee</h1>

<?php echo $this->renderPartial('_form', array('consignee'=>$consignee, 'company'=>$company)); ?>