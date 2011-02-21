<?php
$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Job', 'url'=>array('index')),
	array('label'=>'Create Job', 'url'=>array('create')),
	array('label'=>'Update Job', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Job', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Job', 'url'=>array('admin')),
);
?>

<h1>View Job #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employer_id',
		'job_type_id',
		'job_main_category_id',
		'job_sub_category_id',
		'country_id',
		'state_id',
		'city_id',
		'city_others',
		'title',
		'description',
		'clean_url',
		'min_experience_m',
		'min_experience_y',
		'expected_salary',
		'notice_period',
		'apply_inline',
		'status',
		'view_count',
		'start_date',
		'end_date',
		'listing',
		'created_at',
		'updated_at',
	),
)); ?>
