<?php
	$form_structure = array(
		'elements' => array(
			'username' => array(
				'type' => 'text',
				'maxlength' => 15,
			),
			'password' => array(
				'type' => 'password',
				'maxlength' => 15,
			),
			'email' => array(
				'type' => 'text',
				'maxlength' => 100,
			),
		),
		'buttons' => array(
			'register' => array(
				'type' => 'submit',
				'label' => 'Register',
			),
		),
	);
	return $form_structure;
?>
