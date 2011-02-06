<?php

class m110205_171054_create_country_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('country', array(
			'id' => 'pk',
			'name' => 'varchar(255) NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('country');
	}
}