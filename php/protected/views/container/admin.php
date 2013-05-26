<?php
/* @var $this ContainerController */
/* @var $model Container */

$this->breadcrumbs = array(
    'Containers' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Container', 'url' => array('index')),
    array('label' => 'Create Container', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#container-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Containers</h1>

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
    'id' => 'container-grid',
    'dataProvider' => $model->search(),
    'columns' => array(
        'id',
        'weight',
        'height',
        'length',
        'type',
        'vessel_id',
        /*
          'identification_code',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
