<?php
/* @var $this ShipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Shipments',
);

$this->menu = array(
    array('label' => 'Create Shipment', 'url' => array('create')),
    array('label' => 'Manage Shipment', 'url' => array('admin')),
);
?>

<h1>Shipments</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        'arrival_date',
        'departure_date',
        'country_of_loading',
        'country_of_discharge',
        'commodity',
        'type',
        'bulk_cargo',
        'container_id',
    ),
));
?>
