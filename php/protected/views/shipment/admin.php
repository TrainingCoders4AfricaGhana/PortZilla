<?php
/* @var $this ShipmentController */
/* @var $model Shipment */

$this->breadcrumbs = array(
    'Shipments' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Shipment', 'url' => array('index')),
    array('label' => 'Create Shipment', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#shipment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Shipments</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'htmlOptions' => array('class' => 'table table-striped table-hover'),
    'id' => 'shipment-grid',
    'dataProvider' => $model->search(),
    //'filter'=>$model,
    'columns' => array(
        'id',
        'arrival_date',
        'departure_date',
        'country_of_loading',
        'country_of_discharge',
        'commodity',
        /*
          'type',
          'bulk_cargo',
          'port_id',
          'container_id',
          'shipper_id',
          'consignee_id',
          'agent_id',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
