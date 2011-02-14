<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" media="screen, projection" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="sitename"><?php echo CHtml::encode(Yii::app()->name); ?> - Admin</div>
	</div><!-- header -->

	<div id="navigation">
		<span class="name"><?php print CHtml::link('Candidate', array('/site/index')); ?></span> |
		<span class="name"><?php print CHtml::link('Employer', array('/employer/index')); ?></span> | 
		<span class="name"><?php print CHtml::link('Admin', array('/site/admin')); ?></span>
	</div><!-- navigation -->

	<div id="top-menu-admin">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items' => array(
				array('label' => 'Home', 'url' => array('/site/admin')),
				array('label' => 'Country', 'url' => array('/country')),
				array('label' => 'State', 'url' => array('/state')),
				array('label' => 'City', 'url' => array('/city')),
				array('label' => 'Scheme', 'url' => array('/scheme')),
				array('label' => 'Job Type', 'url' => array('/JobType')),
				array('label' => 'Main Category', 'url' => array('/JobMainCategory')),
				array('label' => 'Sub Category', 'url' => array('/JobSubCategory')),
			),
		)); ?>
	</div><!-- top-menu -->

	<div id="content">
		<?php if ($this->breadcrumbs): ?>
			<div id="breadcrumb">
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			</div>
		<?php endif; ?>
		<table class="layout" width="100%" border="0">
			<tr>
				<td id="left-layout" valign="top" width="75%">
					<div id="page-header"><?php echo CHtml::encode($this->pageTitle); ?></div>
					<?php if (Yii::app()->user->hasFlash('error')): ?>
						<div id="page-error">
							<?php echo Yii::app()->user->getFlash('error'); ?>
						</div>
					<?php endif; ?>
					<?php if (Yii::app()->user->hasFlash('success')): ?>
						<div id="page-success">
							<?php echo Yii::app()->user->getFlash('success'); ?>
						</div>
					<?php endif; ?>
					<div id="page-content"><?php echo $content; ?></div>
				</td>
				<td id="right-layout" valign="top" width="25%">
				</td>
			</tr>
		</table>
	</div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Jobcamp. All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>