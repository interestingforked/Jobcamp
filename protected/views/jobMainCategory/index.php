<?php
$this->breadcrumbs=array(
	'Job Main Categories',
);

$this->menu=array(
	array('label'=>'Create JobMainCategory', 'url'=>array('create')),
	array('label'=>'Manage JobMainCategory', 'url'=>array('admin')),
);
?>

<h1>Job Main Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
