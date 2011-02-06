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
	}

	public function down()
	{
		$this->dropTable('state');
	}
}