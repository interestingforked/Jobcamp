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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'free_limit'); ?>
		<?php echo $form->textField($model,'free_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid_limit'); ?>
		<?php echo $form->textField($model,'paid_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_limit'); ?>
		<?php echo $form->textField($model,'special_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'free_timeout'); ?>
		<?php echo $form->textField($model,'free_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid_timeout'); ?>
		<?php echo $form->textField($model,'paid_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_timeout'); ?>
		<?php echo $form->textField($model,'special_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'free_approval_required'); ?>
		<?php echo $form->textField($model,'free_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid_approval_required'); ?>
		<?php echo $form->textField($model,'paid_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_approval_required'); ?>
		<?php echo $form->textField($model,'special_approval_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_default'); ?>
		<?php echo $form->textField($model,'is_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->