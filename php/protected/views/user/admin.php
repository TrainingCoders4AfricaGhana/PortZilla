<?php
/* @var $this UserController */
/* @var $user User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List User', 'url' => array('index')),
    array('label' => 'Create User', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'user' => $user,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'id' => 'user-grid',
    'dataProvider' => $user->search(),
    //'filter' => $user,
    'columns' => array(
        //'id',
        'user_name',
        'date_registered',
        //'is_active',
        'is_admin',
        /*
          'time_stamp',
          'person_id',
         */
        array(
            'name' => 'person_fname',
            'header' => 'First Name',
            'value' => '$data->person->first_name',
        ),
        array(
            'name' => 'person_lname',
            'header' => 'Last Name',
            'value' => '$data->person->last_name',
        ),
        array(
            'name' => 'person_email',
            'header' => 'Email',
            'value' => '$data->person->email',
        ),
        
        array(
            'class' => 'CButtonColumn',
            
        ),
    ),
));
?>
