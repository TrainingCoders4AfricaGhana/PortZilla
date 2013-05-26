<?php
/* @var $this UserController */
/* @var $user User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    $user->id,
);

$this->menu = array(
    array('label' => 'List User', 'url' => array('index')),
    array('label' => 'Create User', 'url' => array('create')),
    array('label' => 'Update User', 'url' => array('update', 'id' => $user->id)),
    array('label' => 'Delete User', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $user->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage User', 'url' => array('admin')),
);
?>

<h1>View User #<?php echo $user->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $user,
    'attributes' => array(
        //'id',
        'user_name',
        //'password',
        'date_registered',
        'is_active',
        'is_admin',
        'time_stamp',
        //'person_id',
        array(
            'name' => 'person_fname',
            'header' => 'First Name',
            'value' =>$user->person->first_name,
        ),
        array(
            'name' => 'person_lname',
            'header' => 'Last Name',
            'value' => $user->person->last_name,
        ),
        array(
            'name' => 'person_phone',
            'header' => 'Phone',
            'value' => $user->person->phone,
        ),
        array(
            'name' => 'person_email',
            'header' => 'Email',
            'value' => $user->person->email,
        ),
        array(
            'name' => 'person_address',
            'header' => 'Address',
            'value' => $user->person->address,
        ),
    ),
));
?>
