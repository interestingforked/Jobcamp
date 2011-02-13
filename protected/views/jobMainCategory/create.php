<?php
$this->breadcrumbs=array(
	'Job Main Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobMainCategory', 'url'=>array('index')),
	array('label'=>'Manage JobMainCategory', 'url'=>array('admin')),
);
?>

<h1>Create JobMainCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>