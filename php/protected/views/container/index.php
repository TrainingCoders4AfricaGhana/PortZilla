<?php
/* @var $this ContainerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Containers',
);

$this->menu = array(
    array('label' => 'Create Container', 'url' => array('create')),
    array('label' => 'Manage Container', 'url' => array('admin')),
);
?>

<h1>Containers</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
));
?>
