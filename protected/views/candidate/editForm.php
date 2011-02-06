<?php
	$form_structure = array(
		'showErrorSummary' => TRUE,
		'elements' => array(
			'first_name' => array(
				'type' => 'text',
				'maxlength' => 100,
			),
			'last_name' => array(
				'type' => 'text',
				'maxlength' => 100,
			),
			'address1' => array(
				'type' => 'text',
				'maxlength' => 255,
			),
			'address2' => array(
				'type' => 'text',
				'maxlength' => 255,
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
			'pincode' => array(
				'type' => 'text',
				'maxlength' => 10,
			),
			'contact_phone' => array(
				'type' => 'text',
				'maxlength' => 20,
			),
			'contact_mobile' => array(
				'type' => 'text',
				'maxlength' => 20,
			),
			'website' => array(
				'type' => 'text',
				'maxlength' => 255,
			),
			'date_of_birth' => array(
				'type' => 'zii.widgets.jui.CJuiDatePicker',
				'options' => array(
					'dateFormat'=>'yy-mm-dd',
					'changeMonth' => true,
					'changeYear' => true,
				),
			),
			'gender' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getGenderOptions(),
			),
			'marital_status' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getMaritalStatusOptions(),
			),
			'education_profile' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 70,
			),
			'work_profile' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 70,
			),
			'Total Experience',
			'total_experience_y' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getYearOptions(),
			),
			'total_experience_m' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getMonthOptions(),
			),
			'profile_settings' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getProfileSettingsOptions(),
			),
			'contact_settings' => array(
				'type' => 'dropdownlist',
				'items'=> Candidate::model()->getContactSettingsOptions(),
			),
		),
		'buttons' => array(
			'register' => array(
				'type' => 'submit',
				'label' => 'Update Profile',
			),
		),
	);
	return $form_structure;
?>
