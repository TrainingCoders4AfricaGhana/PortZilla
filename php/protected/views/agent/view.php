<?php
/* @var $this AgentController */
/* @var $agent Agent */

$this->breadcrumbs = array(
    'Agents' => array('index'),
    $agent->id,
);

$this->menu = array(
    array('label' => 'List Agent', 'url' => array('index')),
    array('label' => 'Create Agent', 'url' => array('create')),
    array('label' => 'Update Agent', 'url' => array('update', 'id' => $agent->id)),
    array('label' => 'Delete Agent', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $agent->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Agent', 'url' => array('admin')),
);
?>

<h1>View Agent #<?php echo $agent->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $agent,
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
