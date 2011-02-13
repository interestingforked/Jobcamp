<?php
$this->breadcrumbs=array(
	'Job Sub Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobSubCategory', 'url'=>array('index')),
	array('label'=>'Manage JobSubCategory', 'url'=>array('admin')),
);
?>

<h1>Create JobSubCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>