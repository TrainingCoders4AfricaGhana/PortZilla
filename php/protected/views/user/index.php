<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Users',
);

if (Yii::app()->user->isAdmin()) {
    $this->menu = array(
        array('label' => 'Create User', 'url' => array('create')),
        array('label' => 'Manage User', 'url' => array('admin')),
    );
}
?>

<h1>Users</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        'user_name',
        'is_admin',
        'date_registered',
        'person.first_name',
        'person.last_name',
        array(
            'name' => 'person_lname',
            'header' => 'Last name',
            'type' => 'raw',
            'value' => '$data->person->last_name'
        ),
        'person.email',
        'person.phone',
        'person.address',
    ),
));
?>
