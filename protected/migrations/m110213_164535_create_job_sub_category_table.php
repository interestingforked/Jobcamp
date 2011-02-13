<?php

class m110213_164535_create_job_sub_category_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('job_sub_category'), array(
			'id' => 'pk',
			'name' => 'varchar(255) NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('job_sub_category');
	}
}