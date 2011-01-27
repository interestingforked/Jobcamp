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
		),
		'buttons' => array(
			'login' => array(
				'type' => 'submit',
				'label' => 'Login',
			),
		),
	);
	return $form_structure;
?>
