<?php

/**
 * This is the model class for table "candidate".
 *
 * The followings are the available columns in table 'candidate':
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $address1
 * @property string $address2
 * @property integer $city_id
 * @property integer $state_id
 * @property integer $country_id
 * @property integer $pincode
 * @property string $contact_phone
 * @property string $contact_mobile
 * @property string $website
 * @property string $date_of_birth
 * @property integer $age
 * @property string $gender
 * @property integer $maritial_status
 * @property string $education_profile
 * @property string $work_profile
 * @property integer $total_experience_m
 * @property integer $total_experience_y
 * @property integer $contact_settings
 * @property integer $profile_settings
 * @property string $activation_code
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Candidate extends CActiveRecord
{
	public $password;

	/**
	 * Returns the static model of the specified AR class.
	 * @return Candidate the static model class
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
		return 'candidate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'length', 'min' => 4, 'max' => 15),
			array('password', 'length', 'max' => 40),
			//array('email', 'email'),

			array('username, password, email', 'required', 'on' => 'register'),
			array('username, email', 'unique', 'on' => 'register'),
			array('username, password', 'required', 'on' => 'login'),
			//array('id, username, password, email, first_name, last_name, address1, address2, city_id, state_id, country_id, pincode, contact_phone, contact_mobile, website, date_of_birth, age, gender, maritial_status, education_profile, work_profile, total_experience_m, total_experience_y, contact_settings, profile_settings, status, created_at, updated_at', 'required'),
			//array('id, city_id, state_id, country_id, pincode, age, maritial_status, total_experience_m, total_experience_y, contact_settings, profile_settings, status', 'numerical', 'integerOnly'=>true),
			//array('username', 'length', 'max'=>15),
			//array('password', 'length', 'max'=>40),
			//array('email, first_name, last_name', 'length', 'max'=>100),
			//array('address1, address2, website', 'length', 'max'=>255),
			//array('contact_phone, contact_mobile', 'length', 'max'=>20),
			//array('gender', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, first_name, last_name, address1, address2, city_id, state_id, country_id, pincode, contact_phone, contact_mobile, website, date_of_birth, age, gender, maritial_status, education_profile, work_profile, total_experience_m, total_experience_y, contact_settings, profile_settings, status, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'password_hash' => 'Password Hash',
			'email' => 'Email',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address1' => 'Address Line 1',
			'address2' => 'Address Line 2',
			'city_id' => 'City',
			'state_id' => 'State',
			'country_id' => 'Country',
			'pincode' => 'Pincode',
			'contact_phone' => 'Contact Phone',
			'contact_mobile' => 'Contact Mobile',
			'website' => 'Website',
			'date_of_birth' => 'Date Of Birth',
			'age' => 'Age',
			'gender' => 'Gender',
			'maritial_status' => 'Maritial Status',
			'education_profile' => 'Education Profile',
			'work_profile' => 'Work Profile',
			'total_experience_m' => 'Total Experience Months',
			'total_experience_y' => 'Total Experience Years',
			'contact_settings' => 'Contact Settings',
			'profile_settings' => 'Profile Settings',
			'activation_code' => 'Activation Code',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_hash',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_mobile',$this->contact_mobile,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('maritial_status',$this->maritial_status);
		$criteria->compare('education_profile',$this->education_profile,true);
		$criteria->compare('work_profile',$this->work_profile,true);
		$criteria->compare('total_experience_m',$this->total_experience_m);
		$criteria->compare('total_experience_y',$this->total_experience_y);
		$criteria->compare('contact_settings',$this->contact_settings);
		$criteria->compare('profile_settings',$this->profile_settings);
		$criteria->compare('activation_code',$this->activation_code);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->created_at = new CDbExpression('NOW()');
		else
			$this->updated_at = new CDbExpression('NOW()');

		return parent::beforeSave();
	}
}