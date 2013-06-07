<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */

$this->breadcrumbs = array(
    'Shippers' => array('index'),
    $shipper->id,
);

$this->menu = array(
    array('label' => 'List Shipper', 'url' => array('index')),
    array('label' => 'Create Shipper', 'url' => array('create')),
    array('label' => 'Update Shipper', 'url' => array('update', 'id' => $shipper->id)),
    array('label' => 'Delete Shipper', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $shipper->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Shipper', 'url' => array('admin')),
);
?>

<h1>View Shipper #<?php echo $shipper->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $shipper,
    'attributes' => array(
        'id',
        'first_name',
        'last_name',
        //'company_id',
        'company.name',
        'company.phone',
        'company.contact_person',
        'company.city',
        'company.country',
        'company.region',
        'company.address',
        'company.website',
    ),
));
?>
