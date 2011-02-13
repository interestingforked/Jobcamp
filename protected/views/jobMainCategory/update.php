<?php
$this->breadcrumbs=array(
	'Job Main Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobMainCategory', 'url'=>array('index')),
	array('label'=>'Create JobMainCategory', 'url'=>array('create')),
	array('label'=>'View JobMainCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobMainCategory', 'url'=>array('admin')),
);
?>

<h1>Update JobMainCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>