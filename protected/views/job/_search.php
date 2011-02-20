<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_id'); ?>
		<?php echo $form->textField($model,'employer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_type_id'); ?>
		<?php echo $form->textField($model,'job_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_main_category_id'); ?>
		<?php echo $form->textField($model,'job_main_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_sub_category_id'); ?>
		<?php echo $form->textField($model,'job_sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scheme_id'); ?>
		<?php echo $form->textField($model,'scheme_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_others'); ?>
		<?php echo $form->textField($model,'city_others',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clean_url'); ?>
		<?php echo $form->textField($model,'clean_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_experience_m'); ?>
		<?php echo $form->textField($model,'min_experience_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_experience_y'); ?>
		<?php echo $form->textField($model,'min_experience_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expected_salary'); ?>
		<?php echo $form->textField($model,'expected_salary',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notice_period'); ?>
		<?php echo $form->textField($model,'notice_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apply_inline'); ?>
		<?php echo $form->textField($model,'apply_inline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view_count'); ?>
		<?php echo $form->textField($model,'view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->