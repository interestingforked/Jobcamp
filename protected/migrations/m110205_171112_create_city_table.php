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
	}
	
	public function down()
	{
		$this->dropTable('city');
	}
}