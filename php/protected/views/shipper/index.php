<?php
/* @var $this ShipperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Shippers',
);

$this->menu = array(
    array('label' => 'Create Shipper', 'url' => array('create')),
    array('label' => 'Manage Shipper', 'url' => array('admin')),
);
?>

<h1>Shippers</h1>

<?
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        'first_name',
        'last_name',
        'company.name',
        'company.phone',
        'company.contact_person',
        'company.city',
        'company.country',
        'company.region',
        'company.address',
        'company.website',
    )
));
?>
