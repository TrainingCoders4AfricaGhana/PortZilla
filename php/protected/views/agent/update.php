<?php
/* @var $this AgentController */
/* @var $agent Agent */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	$agent->id=>array('view','id'=>$agent->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agent', 'url'=>array('index')),
	array('label'=>'Create Agent', 'url'=>array('create')),
	array('label'=>'View Agent', 'url'=>array('view', 'id'=>$agent->id)),
	array('label'=>'Manage Agent', 'url'=>array('admin')),
);
?>

<h1>Update Agent <?php echo $agent->id; ?></h1>

<?php echo $this->renderPartial('_form', array('agent'=>$agent, 'company'=>$agent->company)); ?>