<?php
/* @var $this ContainerController */
/* @var $model Container */

$this->breadcrumbs=array(
	'Containers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Container', 'url'=>array('index')),
	array('label'=>'Create Container', 'url'=>array('create')),
	array('label'=>'View Container', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Container', 'url'=>array('admin')),
);
?>

<h1>Update Container <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>