<?php
	$form_structure = array(
		'showErrorSummary' => TRUE,
		'elements' => array(
			'company_name' => array(
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
			'total_tunover' => array(
				'type' => 'text',
				'maxlength' => 255,
			),
			'number_of_employees' => array(
				'type' => 'text',
				'maxlength' => 11,
			),
			'sector' => array(
				'type' => 'dropdownlist',
				'items'=> Employer::model()->getSectorOptions(),
			),
			'company_profile' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 70,
			),
			'profile_settings' => array(
				'type' => 'dropdownlist',
				'items'=> Employer::model()->getProfileSettingsOptions(),
			),
			'contact_settings' => array(
				'type' => 'dropdownlist',
				'items'=> Employer::model()->getContactSettingsOptions(),
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
