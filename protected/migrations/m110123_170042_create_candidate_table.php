<?php

class m110123_170042_create_candidate_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('candidate', array(
			'id' => 'pk',
			'username' => 'varchar(15) NOT NULL',
			'password' => 'varchar(40) NOT NULL',
			'email' => 'varchar(100) NOT NULL',
			'first_name' => 'varchar(100) NOT NULL',
			'last_name' => 'varchar(100) NOT NULL',
			'address1' => 'varchar(255) NOT NULL',
			'address2' => 'varchar(255) NOT NULL',
			'city_id' => 'int(11) NOT NULL',
			'state_id' => 'int(11) NOT NULL',
			'country_id' => 'int(11) NOT NULL',
			'pincode' => 'int(10) NOT NULL',
			'contact_phone' => 'varchar(20) NOT NULL',
			'contact_mobile' => 'varchar(20) NOT NULL',
			'website' => 'varchar(255) NOT NULL',
			'date_of_birth' => 'datetime NOT NULL',
			'age' => 'int(3) NOT NULL',
			'gender' => 'char(1) NOT NULL',
			'maritial_status' => 'int(1) NOT NULL',
			'education_profile' => 'mediumtext NOT NULL',
			'work_profile' => 'mediumtext NOT NULL',
			'total_experience_m' => 'int(2) NOT NULL',
			'total_experience_y' => 'int(3) NOT NULL',
			'contact_settings' => 'int(1) NOT NULL',
			'profile_settings' => 'int(1) NOT NULL',
			'status' => 'int(1) NOT NULL',
			'created_at' => 'datetime NOT NULL',
			'updated_at' => 'datetime NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('candidate');
	}
}
