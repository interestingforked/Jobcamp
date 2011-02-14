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
	}

	public function down()
	{
		$this->droptable('scheme');
	}
}