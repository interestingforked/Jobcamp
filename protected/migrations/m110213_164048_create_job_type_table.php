<?php

class m110213_164048_create_job_type_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('job_type', array(
			'id' => 'pk',
			'name' => 'varchar(100) NOT NULL',
			'image_url' => 'varchar(255) NOT NULL',
		));
		$this->insert('job_type', array(
			'id' => 1,
			'name' => 'Full Time',
			'image_url' => 'icons/fulltime.png',
		));
		$this->insert('job_type', array(
			'id' => 2,
			'name' => 'Part Time',
			'image_url' => 'icons/parttime.png',
		));
		$this->insert('job_type', array(
			'id' => 3,
			'name' => 'Freelance',
			'image_url' => 'icons/freelance.png',
		));
		$this->insert('job_type', array(
			'id' => 4,
			'name' => 'Volunteer',
			'image_url' => 'icons/volunteer.png',
		));
	}

	public function down()
	{
		$this->dropTable('job_type');
	}
}