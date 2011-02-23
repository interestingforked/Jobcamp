<?php

class m110205_171112_create_city_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('city', array(
			'id' => 'pk',
			'state_id' => 'int(11) NOT NULL',
			'name' => 'varchar(255) NOT NULL',
		));
		$this->addForeignKey('state_present', 'city', 'state_id', 'state', 'id', 'RESTRICT', 'RESTRICT');

		$this->insert('city', array(
			'id' => 1,
			'state_id' => 1,
			'name' => 'Mumbai',
		));
		$this->insert('city', array(
			'id' => 2,
			'state_id' => 2,
			'name' => 'Hyderabad',
		));
		$this->insert('city', array(
			'id' => 3,
			'state_id' => 3,
			'name' => 'San Jose',
		));
		$this->insert('city', array(
			'id' => 4,
			'state_id' => 4,
			'name' => 'Austin',
		));
	}
	
	public function down()
	{
		$this->dropTable('city');
	}
}