<?php
/* @var $this PortController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Ports',
);

$this->menu = array(
    array('label' => 'Create Port', 'url' => array('create')),
    array('label' => 'Manage Port', 'url' => array('admin')),
);
?>

<h1>Ports</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
));
?>
