<?php
	$form_structure = array(
		'showErrorSummary' => TRUE,
		'elements' => array(
			'title' => array(
				'type' => 'text',
				'maxlength' => 100,
			),
			'description' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 70,
			),
			'country_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => Country::model()->getAll(),
			),
			'state_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => State::model()->getAll(),
			),
			'city_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => City::model()->getAll(),
			),
			'city_others' => array(
				'type' => 'text',
				'maxlength' => 20,
			),
			'job_type_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => JobType::model()->getAll(),
			),
			'job_main_category_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => JobMainCategory::model()->getAll(),
			),
			'job_sub_category_id' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => JobSubCategory::model()->getAll(),
			),
			'expected_salary' => array(
				'type' => 'text',
				'maxlength' => 15,
			),
			'notice_period' => array(
				'type' => 'text',
				'maxlength' => 3,
			),
			'start_date' => array(
				'type' => 'zii.widgets.jui.CJuiDatePicker',
				'options' => array(
					'dateFormat'=>'yy-mm-dd',
					'changeMonth' => true,
					'changeYear' => true,
				),
			),
			'end_date' => array(
				'type' => 'zii.widgets.jui.CJuiDatePicker',
				'options' => array(
					'dateFormat'=>'yy-mm-dd',
					'changeMonth' => true,
					'changeYear' => true,
				),
			),
			'min_experience_y' => array(
				'type' => 'dropdownlist',
				'items'=> Job::model()->getYearOptions(),
			),
			'min_experience_m' => array(
				'type' => 'dropdownlist',
				'items'=> Job::model()->getMonthOptions(),
			),
			'apply_inline' => array(
				'type' => 'checkbox',
			),
			'listing' => array(
				'type' => 'dropdownlist',
				'maxlength' => 15,
				'items' => Job::model()->getListingOptions(),
			),
		),
		'buttons' => array(
			'create' => array(
				'type' => 'submit',
				'label' => 'Create Job Opening',
			),
		),
	);
	return $form_structure;
?>
