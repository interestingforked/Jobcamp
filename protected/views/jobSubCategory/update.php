<?php
$this->breadcrumbs=array(
	'Job Sub Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobSubCategory', 'url'=>array('index')),
	array('label'=>'Create JobSubCategory', 'url'=>array('create')),
	array('label'=>'View JobSubCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobSubCategory', 'url'=>array('admin')),
);
?>

<h1>Update JobSubCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>