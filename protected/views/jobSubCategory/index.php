<?php
$this->breadcrumbs=array(
	'Job Sub Categories',
);

$this->menu=array(
	array('label'=>'Create JobSubCategory', 'url'=>array('create')),
	array('label'=>'Manage JobSubCategory', 'url'=>array('admin')),
);
?>

<h1>Job Sub Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
