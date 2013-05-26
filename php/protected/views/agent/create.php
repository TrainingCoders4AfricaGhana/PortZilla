<?php
/* @var $this AgentController */
/* @var $agent Agent */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agent', 'url'=>array('index')),
	array('label'=>'Manage Agent', 'url'=>array('admin')),
);
?>

<h1>Create Agent</h1>

<?php echo $this->renderPartial('_form', array('agent'=>$agent, 'company'=>$company)); ?>