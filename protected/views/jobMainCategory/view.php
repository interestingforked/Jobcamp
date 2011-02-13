<?php
$this->breadcrumbs=array(
	'Job Main Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobMainCategory', 'url'=>array('index')),
	array('label'=>'Create JobMainCategory', 'url'=>array('create')),
	array('label'=>'Update JobMainCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobMainCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobMainCategory', 'url'=>array('admin')),
);
?>

<h1>View JobMainCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
