<?php

class m110214_163224_create_scheme_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('scheme', array(
			'id' => 'pk',
			'name' => 'varchar(100) NOT NULL',
			'description' => 'varchar(255) NOT NULL',
			'price' => 'decimal(15,2) NOT NULL DEFAULT 0.00',
			'free_limit' => 'int(11) NOT NULL',
			'paid_limit' => 'int(11) NOT NULL',
			'special_limit' => 'int(11) NOT NULL',
			'free_timeout' => 'int(11) NOT NULL',
			'paid_timeout' => 'int(11) NOT NULL',
			'special_timeout' => 'int(11) NOT NULL',
			'free_approval_required' => 'int(1) NOT NULL',
			'paid_approval_required' => 'int(1) NOT NULL',
			'special_approval_required' => 'int(1) NOT NULL',
			'is_default' => 'int(1) NOT NULL',
			'status' => 'int(1) NOT NULL',
		));

		$this->insert('scheme', array(
			'id' => 1,
			'name' => 'Freedom Plan',
			'description' => 'Free Job Posting',
			'price' => '0.00',
			'free_limit' => 5,
			'paid_limit' => 2,
			'special_limit' => 1,
			'free_timeout' => 10,
			'paid_timeout' => 20,
			'special_timeout' => 30,
			'free_approval_required' => 0,
			'paid_approval_required' => 1,
			'special_approval_required' => 1,
			'is_default' => 1,
			'status' => 1,
		));
	}

	public function down()
	{
		$this->droptable('scheme');
	}
}