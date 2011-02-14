<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('free_limit')); ?>:</b>
	<?php echo CHtml::encode($data->free_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_limit')); ?>:</b>
	<?php echo CHtml::encode($data->paid_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_limit')); ?>:</b>
	<?php echo CHtml::encode($data->special_limit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('free_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->free_timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->paid_timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->special_timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('free_approval_required')); ?>:</b>
	<?php echo CHtml::encode($data->free_approval_required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_approval_required')); ?>:</b>
	<?php echo CHtml::encode($data->paid_approval_required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_approval_required')); ?>:</b>
	<?php echo CHtml::encode($data->special_approval_required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_default')); ?>:</b>
	<?php echo CHtml::encode($data->is_default); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>