<?php
/* @var $this AgentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Agents',
);

$this->menu = array(
    array('label' => 'Create Agent', 'url' => array('create')),
    array('label' => 'Manage Agent', 'url' => array('admin')),
);
?>

<h1>Agents</h1>

<?php
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
