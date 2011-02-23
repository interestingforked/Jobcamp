<?php

/**
 * This is the model class for table "job".
 *
 * The followings are the available columns in table 'job':
 * @property integer $id
 * @property integer $employer_id
 * @property integer $job_type_id
 * @property integer $job_main_category_id
 * @property integer $job_sub_category_id
 * @property integer $country_id
 * @property integer $state_id
 * @property integer $city_id
 * @property string $city_others
 * @property string $title
 * @property string $description
 * @property string $clean_url
 * @property integer $min_experience_m
 * @property integer $min_experience_y
 * @property string $expected_salary
 * @property integer $notice_period
 * @property integer $apply_inline
 * @property integer $status
 * @property integer $view_count
 * @property string $start_date
 * @property string $end_date
 * @property integer $listing
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Employer $employer
 */
class Job extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Job the static model class
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
		return 'job';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description', 'required'),
			array('min_experience_m, min_experience_y, expected_salary, notice_period, apply_inline, start_date, end_date', 'safe', 'on' => 'create'),
			array('country_id, state_id, city_id, job_type_id, job_main_category_id, job_sub_category_id', 'numerical', 'on' => 'create'),
			array('min_experience_m', 'in', 'range' => $this->getMonthOptions(), 'on' => 'create'),
			array('min_experience_y', 'in', 'range' => $this->getyearOptions(), 'on' => 'create'),
			array('listing', 'in', 'range' => array_keys($this->getListingOptions()), 'on' => 'create'),
			array('title, clean_url', 'length', 'max' => 255),
			array('expected_salary', 'length', 'max' => 15),
			//array('employer_id, job_type_id, job_main_category_id, job_sub_category_id, country_id, state_id, city_id, city_others, title, description, clean_url, min_experience_m, min_experience_y, notice_period, apply_inline, start_date, end_date, listing, created_at, updated_at', 'required'),
			//array('employer_id, job_type_id, job_main_category_id, job_sub_category_id, country_id, state_id, city_id, min_experience_m, min_experience_y, notice_period, apply_inline, status, view_count, listing', 'numerical', 'integerOnly'=>true),
			array('city_others', 'length', 'max' => 20),
			array('title, clean_url', 'length', 'max' => 255),
			array('expected_salary', 'length', 'max' => 15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employer_id, job_type_id, job_main_category_id, job_sub_category_id, country_id, state_id, city_id, city_others, title, description, clean_url, min_experience_m, min_experience_y, expected_salary, notice_period, apply_inline, status, view_count, start_date, end_date, listing, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'employer' => array(self::BELONGS_TO, 'Employer', 'employer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employer_id' => 'Employer',
			'job_type_id' => 'Job Type',
			'job_main_category_id' => 'Job Main Category',
			'job_sub_category_id' => 'Job Sub Category',
			'country_id' => 'Country',
			'state_id' => 'State',
			'city_id' => 'City',
			'city_others' => 'City Others',
			'title' => 'Title',
			'description' => 'Description',
			'clean_url' => 'Clean Url',
			'min_experience_m' => 'Min Experience Months',
			'min_experience_y' => 'Min Experience Years',
			'expected_salary' => 'Expected Salary',
			'notice_period' => 'Notice Period',
			'apply_inline' => 'Apply Inline',
			'status' => 'Status',
			'view_count' => 'View Count',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'listing' => 'Listing',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Update timestamps before saving job information
	 */
	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->created_at = new CDbExpression('NOW()');
		else
			$this->updated_at = new CDbExpression('NOW()');

		return parent::beforeSave();
	}

	public function getMonthOptions()
	{
		return array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
	}

	public function getYearOptions()
	{
		return array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
	}

	public function getListingOptions()
	{
		return array(
			1 => 'Free Listing',
			2 => 'Paid Listing',
			3 => 'Special Listing',
		);
	}

	public function getListingText()
	{
		switch ($this->contact_settings) {
			case 1: return 'Free Listing'; break;
			case 2: return 'Paid Listing'; break;
			case 3: return 'Special Listing'; break;
			default: return 'Unknown'; break;
		}
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
		$criteria->compare('employer_id',$this->employer_id);
		$criteria->compare('job_type_id',$this->job_type_id);
		$criteria->compare('job_main_category_id',$this->job_main_category_id);
		$criteria->compare('job_sub_category_id',$this->job_sub_category_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('city_others',$this->city_others,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('clean_url',$this->clean_url,true);
		$criteria->compare('min_experience_m',$this->min_experience_m);
		$criteria->compare('min_experience_y',$this->min_experience_y);
		$criteria->compare('expected_salary',$this->expected_salary,true);
		$criteria->compare('notice_period',$this->notice_period);
		$criteria->compare('apply_inline',$this->apply_inline);
		$criteria->compare('status',$this->status);
		$criteria->compare('view_count',$this->view_count);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('listing',$this->listing);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}