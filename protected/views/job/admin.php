<?php
$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Job', 'url'=>array('index')),
	array('label'=>'Create Job', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('job-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jobs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'employer_id',
		'job_type_id',
		'job_main_category_id',
		'job_sub_category_id',
		'scheme_id',
		/*
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
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
