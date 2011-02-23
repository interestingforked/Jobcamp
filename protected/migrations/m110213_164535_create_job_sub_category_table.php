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

		$this->insert('job_sub_category', array(
			'id' => 1,
			'job_main_category_id' => 1,
			'name' => 'Software',
		));
		$this->insert('job_sub_category', array(
			'id' => 2,
			'job_main_category_id' => 1,
			'name' => 'Networking',
		));
		$this->insert('job_sub_category', array(
			'id' => 3,
			'job_main_category_id' => 1,
			'name' => 'Web Designing',
		));
		$this->insert('job_sub_category', array(
			'id' => 4,
			'job_main_category_id' => 2,
			'name' => 'Financial Consultant',
		));
		$this->insert('job_sub_category', array(
			'id' => 5,
			'job_main_category_id' => 2,
			'name' => 'Accountant',
		));
	}

	public function down()
	{
		$this->dropTable('job_sub_category');
	}
}