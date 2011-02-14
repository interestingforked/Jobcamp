<?php
$this->breadcrumbs=array(
	'Schemes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Scheme', 'url'=>array('index')),
	array('label'=>'Create Scheme', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('scheme-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Schemes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scheme-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'price',
		'free_limit',
		'paid_limit',
		/*
		'special_limit',
		'free_timeout',
		'paid_timeout',
		'special_timeout',
		'free_approval_required',
		'paid_approval_required',
		'special_approval_required',
		'is_default',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
