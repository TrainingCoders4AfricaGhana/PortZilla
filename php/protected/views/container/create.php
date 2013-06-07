<?php
/* @var $this ContainerController */
/* @var $model Container */

$this->breadcrumbs=array(
	'Containers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Container', 'url'=>array('index')),
	array('label'=>'Manage Container', 'url'=>array('admin')),
);
?>

<h1>Create Container</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>