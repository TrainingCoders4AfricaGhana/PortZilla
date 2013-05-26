<?php
/* @var $this VesselController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Vessels',
);

$this->menu = array(
    array('label' => 'Create Vessel', 'url' => array('create')),
    array('label' => 'Manage Vessel', 'url' => array('admin')),
);
?>

<h1>Vessels</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
));
?>
