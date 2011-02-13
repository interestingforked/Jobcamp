<?php

class m110213_164505_create_job_main_category_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('job_main_category', array(
			'id' => 'pk',
			'name' => 'varchar(255) NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('job_main_category');
	}
}