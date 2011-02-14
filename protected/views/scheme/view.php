<?php
$this->breadcrumbs=array(
	'Schemes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Scheme', 'url'=>array('index')),
	array('label'=>'Create Scheme', 'url'=>array('create')),
	array('label'=>'Update Scheme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scheme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scheme', 'url'=>array('admin')),
);
?>

<h1>View Scheme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'price',
		'free_limit',
		'paid_limit',
		'special_limit',
		'free_timeout',
		'paid_timeout',
		'special_timeout',
		'free_approval_required',
		'paid_approval_required',
		'special_approval_required',
		'is_default',
		'status',
	),
)); ?>
