<?php
$this->breadcrumbs=array(
	'Job Sub Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobSubCategory', 'url'=>array('index')),
	array('label'=>'Create JobSubCategory', 'url'=>array('create')),
	array('label'=>'Update JobSubCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobSubCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobSubCategory', 'url'=>array('admin')),
);
?>

<h1>View JobSubCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_main_category_id',
		'name',
	),
)); ?>
