<?php

class m110220_160053_create_job_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('job', array(
			'id' => 'pk',
			'employer_id' => 'int(11) NOT NULL',
			'job_type_id' => 'int(11) NOT NULL',
			'job_main_category_id' => 'int(11) NOT NULL',
			'job_sub_category_id' => 'int(11) NOT NULL',
			'scheme_id' => 'int(11) NOT NULL',
			'country_id' => 'int(11) NOT NULL',
			'state_id' => 'int(11) NOT NULL',
			'city_id' => 'int(11) NOT NULL',
			'city_others' => 'varchar(20) NOT NULL',
			'title' => 'varchar(255) NOT NULL',
			'description' => 'mediumtext NOT NULL',
			'clean_url' => 'varchar(255) NOT NULL',
			'min_experience_m' => 'int(2) NOT NULL',
			'min_experience_y' => 'int(3) NOT NULL',
			'expected_salary' => 'decimal(15, 0)',
			'notice_period' => 'int(3) NOT NULL',
			'apply_inline' => 'int(1) NOT NULL',
			'status' => 'int(1) NOT NULL DEFAULT 0',
			'view_count' => 'int(11) NOT NULL DEFAULT 0',
			'start_date' => 'datetime NOT NULL',
			'end_date' => 'datetime NOT NULL',
			'created_at' => 'datetime NOT NULL',
			'updated_at' => 'datetime NOT NULL',
		));
		$this->addForeignKey('employer_present', 'job', 'employer_id', 'employer', 'id', 'RESTRICT', 'RESTRICT');
	}

	public function down()
	{
		$this->dropTable('job');
	}
}