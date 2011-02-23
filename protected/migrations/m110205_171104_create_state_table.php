<?php

class m110205_171104_create_state_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('state', array(
			'id' => 'pk',
			'country_id' => 'int(11) NOT NULL',
			'name' => 'varchar(255) NOT NULL',
		));
		$this->addForeignKey('country_present', 'state', 'country_id', 'country', 'id', 'RESTRICT', 'RESTRICT');

		$this->insert('state', array(
			'id' => 1,
			'country_id' => 1,
			'name' => 'Maharashtra',
		));
		$this->insert('state', array(
			'id' => 2,
			'country_id' => 1,
			'name' => 'Andra Pradesh',
		));
		$this->insert('state', array(
			'id' => 3,
			'country_id' => 2,
			'name' => 'California',
		));
		$this->insert('state', array(
			'id' => 4,
			'country_id' => 2,
			'name' => 'Texas',
		));
	}

	public function down()
	{
		$this->dropTable('state');
	}
}