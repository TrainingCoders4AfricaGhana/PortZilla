<?php
/* @var $this ShipperController */
/* @var $shipper Shipper */

$this->breadcrumbs = array(
    'Shippers' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Shipper', 'url' => array('index')),
    array('label' => 'Create Shipper', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#shipper-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Shippers</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'shipper' => $shipper,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'id' => 'shipper-grid',
    'dataProvider' => $shipper->search(),
    //'filter' => $shipper,
    'columns' => array(
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
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
