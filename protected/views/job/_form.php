<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_id'); ?>
		<?php echo $form->textField($model,'employer_id'); ?>
		<?php echo $form->error($model,'employer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_type_id'); ?>
		<?php echo $form->textField($model,'job_type_id'); ?>
		<?php echo $form->error($model,'job_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_main_category_id'); ?>
		<?php echo $form->textField($model,'job_main_category_id'); ?>
		<?php echo $form->error($model,'job_main_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_sub_category_id'); ?>
		<?php echo $form->textField($model,'job_sub_category_id'); ?>
		<?php echo $form->error($model,'job_sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
		<?php echo $form->error($model,'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_others'); ?>
		<?php echo $form->textField($model,'city_others',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city_others'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clean_url'); ?>
		<?php echo $form->textField($model,'clean_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clean_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_experience_m'); ?>
		<?php echo $form->textField($model,'min_experience_m'); ?>
		<?php echo $form->error($model,'min_experience_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_experience_y'); ?>
		<?php echo $form->textField($model,'min_experience_y'); ?>
		<?php echo $form->error($model,'min_experience_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expected_salary'); ?>
		<?php echo $form->textField($model,'expected_salary',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'expected_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notice_period'); ?>
		<?php echo $form->textField($model,'notice_period'); ?>
		<?php echo $form->error($model,'notice_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_inline'); ?>
		<?php echo $form->textField($model,'apply_inline'); ?>
		<?php echo $form->error($model,'apply_inline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_count'); ?>
		<?php echo $form->textField($model,'view_count'); ?>
		<?php echo $form->error($model,'view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listing'); ?>
		<?php echo $form->textField($model,'listing'); ?>
		<?php echo $form->error($model,'listing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->