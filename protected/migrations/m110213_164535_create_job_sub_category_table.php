<?php

class m110213_164535_create_job_sub_category_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('job_sub_category', array(
			'id' => 'pk',
			'job_main_category_id' => 'int(11) NOT NULL',
			'name' => 'varchar(255) NOT NULL',
		));
		$this->addForeignKey('job_main_category_present', 'job_sub_category', 'job_main_category_id', 'job_main_category', 'id', 'RESTRICT', 'RESTRICT');
	}

	public function down()
	{
		$this->dropTable('job_sub_category');
	}
}