<?php

class m110207_154817_create_employer_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('employer', array(
			'id' => 'pk',
			'scheme_id' => 'int(11) NOT NULL',
			'username' => 'varchar(15) NOT NULL',
			'password_hash' => 'varchar(40) NOT NULL',
			'email' => 'varchar(100) NOT NULL',
			'company_name' => 'varchar(255) NOT NULL',
			'address1' => 'varchar(255) NOT NULL',
			'address2' => 'varchar(255) NOT NULL',
			'city_id' => 'int(11) NOT NULL',
			'state_id' => 'int(11) NOT NULL',
			'country_id' => 'int(11) NOT NULL',
			'pincode' => 'int(10) NOT NULL',
			'contact_phone' => 'varchar(20) NOT NULL',
			'contact_mobile' => 'varchar(20) NOT NULL',
			'website' => 'varchar(255) NOT NULL',
			'total_tunover' => 'varchar(255) NOT NULL',
			'number_of_employees' => 'int(11) NOT NULL',
			'sector' => 'int(2) NOT NULL',
			'company_profile' => 'mediumtext NOT NULL',
			'contact_settings' => 'int(1) NOT NULL',
			'profile_settings' => 'int(1) NOT NULL',
			'activation_code' => 'varchar(40) NOT NULL',
			'scheme_start' => 'date NOT NULL',
			'scheme_end' => 'date NOT NULL',
			'job_post_counter' => 'int(11) NOT NULL',
			'status' => 'int(1) NOT NULL',
			'created_at' => 'datetime NOT NULL',
			'updated_at' => 'datetime NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('employer');
	}
}