<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scheme-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'free_limit'); ?>
		<?php echo $form->textField($model,'free_limit'); ?>
		<?php echo $form->error($model,'free_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_limit'); ?>
		<?php echo $form->textField($model,'paid_limit'); ?>
		<?php echo $form->error($model,'paid_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_limit'); ?>
		<?php echo $form->textField($model,'special_limit'); ?>
		<?php echo $form->error($model,'special_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'free_timeout'); ?>
		<?php echo $form->textField($model,'free_timeout'); ?>
		<?php echo $form->error($model,'free_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_timeout'); ?>
		<?php echo $form->textField($model,'paid_timeout'); ?>
		<?php echo $form->error($model,'paid_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_timeout'); ?>
		<?php echo $form->textField($model,'special_timeout'); ?>
		<?php echo $form->error($model,'special_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'free_approval_required'); ?>
		<?php echo $form->textField($model,'free_approval_required'); ?>
		<?php echo $form->error($model,'free_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_approval_required'); ?>
		<?php echo $form->textField($model,'paid_approval_required'); ?>
		<?php echo $form->error($model,'paid_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'special_approval_required'); ?>
		<?php echo $form->textField($model,'special_approval_required'); ?>
		<?php echo $form->error($model,'special_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_default'); ?>
		<?php echo $form->textField($model,'is_default'); ?>
		<?php echo $form->error($model,'is_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->