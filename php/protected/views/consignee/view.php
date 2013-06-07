<?php
/* @var $this ConsigneeController */
/* @var $consignee Consignee */

$this->breadcrumbs = array(
    'Consignees' => array('index'),
    $consignee->id,
);

$this->menu = array(
    array('label' => 'List Consignee', 'url' => array('index')),
    array('label' => 'Create Consignee', 'url' => array('create')),
    array('label' => 'Update Consignee', 'url' => array('update', 'id' => $consignee->id)),
    array('label' => 'Delete Consignee', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $consignee->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Consignee', 'url' => array('admin')),
);
?>

<h1>View Consignee #<?php echo $consignee->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $consignee,
    'attributes' => array(
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
    ),
));
?>
