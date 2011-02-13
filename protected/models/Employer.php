<?php

/**
 * This is the model class for table "employer".
 *
 * The followings are the available columns in table 'employer':
 * @property integer $id
 * @property integer $scheme_id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $company_name
 * @property string $address1
 * @property string $address2
 * @property integer $city_id
 * @property integer $state_id
 * @property integer $country_id
 * @property integer $pincode
 * @property string $contact_phone
 * @property string $contact_mobile
 * @property string $website
 * @property string $total_tunover
 * @property integer $number_of_employees
 * @property integer $sector
 * @property string $company_profile
 * @property integer $contact_settings
 * @property integer $profile_settings
 * @property string $activation_code
 * @property string $scheme_start
 * @property string $scheme_end
 * @property integer $job_post_counter
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Employer extends CActiveRecord
{
	public $password;

	/**
	 * Returns the static model of the specified AR class.
	 * @return Employer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, username, password_hash, email, activation_code, status, created_at, updated_at', 'unsafe', 'on' => 'edit'),

			array('username', 'length', 'min' => 4, 'max' => 15),
			array('password', 'length', 'max' => 40),
			array('email', 'email'),

			array('username, password, email', 'required', 'on' => 'register'),
			array('username, email', 'unique', 'on' => 'register'),

			array('username, password', 'required', 'on' => 'login'),

			array('company_name', 'required', 'on' => 'edit'),
			array('address1, address2, city_id, state_id, country_id, pincode, contact_phone, contact_mobile, total_tunover, company_profile', 'safe', 'on' => 'edit'),
			array('pincode', 'numerical', 'on' => 'edit'),
			array('pincode', 'length', 'min' => 4, 'on' => 'edit'),
			array('website', 'url', 'on' => 'edit'),
			array('number_of_employees', 'numerical', 'on' => 'edit'),
			array('sector', 'in', 'range' => array_keys($this->getSectorOptions()), 'on' => 'edit'),
			array('profile_settings', 'in', 'range' => array_keys($this->getProfileSettingsOptions()), 'on' => 'edit'),
			array('contact_settings', 'in', 'range' => array_keys($this->getContactSettingsOptions()), 'on' => 'edit'),

			// array('scheme_id, username, password_hash, email, company_name, address1, address2, city_id, state_id, country_id, pincode, contact_phone, contact_mobile, website, total_tunover, number_of_employees, sector, company_profile, contact_settings, profile_settings, activation_code, scheme_start, scheme_end, job_post_counter, status, created_at, updated_at', 'required'),
			// array('scheme_id, city_id, state_id, country_id, pincode, number_of_employees, sector, contact_settings, profile_settings, job_post_counter, status', 'numerical', 'integerOnly'=>true),
			// array('username', 'length', 'max'=>15),
			// array('password_hash, activation_code', 'length', 'max'=>40),
			// array('email', 'length', 'max'=>100),
			// array('company_name, address1, address2, website, total_tunover', 'length', 'max'=>255),
			// array('contact_phone, contact_mobile', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.

			array('id, scheme_id, username, password_hash, email, company_name, address1, address2, city_id, state_id, country_id, pincode, contact_phone, contact_mobile, website, total_tunover, number_of_employees, sector, company_profile, contact_settings, profile_settings, activation_code, scheme_start, scheme_end, job_post_counter, status, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'scheme_id' => 'Scheme',
			'username' => 'Username',
			'password_hash' => 'Password Hash',
			'email' => 'Email',
			'company_name' => 'Company Name',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city_id' => 'City',
			'state_id' => 'State',
			'country_id' => 'Country',
			'pincode' => 'Pincode',
			'contact_phone' => 'Contact Phone',
			'contact_mobile' => 'Contact Mobile',
			'website' => 'Website',
			'total_tunover' => 'Total Tunover',
			'number_of_employees' => 'Number Of Employees',
			'sector' => 'Sector',
			'company_profile' => 'Company Profile',
			'contact_settings' => 'Contact Settings',
			'profile_settings' => 'Profile Settings',
			'activation_code' => 'Activation Code',
			'scheme_start' => 'Scheme Start',
			'scheme_end' => 'Scheme End',
			'job_post_counter' => 'Job Post Counter',
			'status' => 'Status',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('scheme_id',$this->scheme_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password_hash',$this->password_hash,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_mobile',$this->contact_mobile,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('total_tunover',$this->total_tunover,true);
		$criteria->compare('number_of_employees',$this->number_of_employees);
		$criteria->compare('sector',$this->sector);
		$criteria->compare('company_profile',$this->company_profile,true);
		$criteria->compare('contact_settings',$this->contact_settings);
		$criteria->compare('profile_settings',$this->profile_settings);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('scheme_start',$this->scheme_start,true);
		$criteria->compare('scheme_end',$this->scheme_end,true);
		$criteria->compare('job_post_counter',$this->job_post_counter);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Update timestamps before saving employer information
	 */
	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->created_at = new CDbExpression('NOW()');
		else
			$this->updated_at = new CDbExpression('NOW()');

		return parent::beforeSave();
	}

	public function getSectorOptions()
	{
		return array(
			1 => 'Private',
			2 => 'Public',
		);
	}

	public function getSectorText()
	{
		switch ($this->profile_settings) {
			case 1:  return 'Private'; break;
			case 2:  return 'Public'; break;
			default: return 'Unknown'; break;
		}
	}

	public function getProfileSettingsOptions()
	{
		return array(
			1 => 'Let everyone see my profile',
			2 => 'Only registered candidates can see my profile',
			3 => 'No one can see my profile details',
		);
	}

	public function getProfileSettingsText()
	{
		switch ($this->profile_settings) {
			case 1:  return 'Let everyone see my profile'; break;
			case 2:  return 'Only registered candidates can see my profile'; break;
			case 3:  return 'No one can see my profile details'; break;
			default: return 'Unknown'; break;
		}
	}

	public function getContactSettingsOptions()
	{
		return array(
			1 => 'Let everyone see my contact details',
			2 => 'Only registered candidates can see my contact details',
			3 => 'No one can see my contact details',
		);
	}

	public function getContactSettingsText()
	{
		switch ($this->contact_settings) {
			case 1: return 'Let everyone see my contact details'; break;
			case 2: return 'Only registered candidates can see my contact details'; break;
			case 3: return 'No one can see my contact details'; break;
			default: return 'Unknown'; break;
		}
	}
}