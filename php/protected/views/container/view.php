<?php
/* @var $this ContainerController */
/* @var $model Container */

$this->breadcrumbs=array(
	'Containers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Container', 'url'=>array('index')),
	array('label'=>'Create Container', 'url'=>array('create')),
	array('label'=>'Update Container', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Container', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Container', 'url'=>array('admin')),
);
?>

<h1>View Container #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'weight',
		'height',
		'length',
		'type',
		'vessel_id',
		'identification_code',
	),
)); ?>
