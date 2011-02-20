<?php

/**
 * This is the model class for table "scheme".
 *
 * The followings are the available columns in table 'scheme':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property integer $free_limit
 * @property integer $paid_limit
 * @property integer $special_limit
 * @property integer $free_timeout
 * @property integer $paid_timeout
 * @property integer $special_timeout
 * @property integer $free_approval_required
 * @property integer $paid_approval_required
 * @property integer $special_approval_required
 * @property integer $is_default
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Employer[] $employers
 */
class Scheme extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Scheme the static model class
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
		return 'scheme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, free_limit, paid_limit, special_limit, free_timeout, paid_timeout, special_timeout, free_approval_required, paid_approval_required, special_approval_required, is_default, status', 'required'),
			array('free_limit, paid_limit, special_limit, free_timeout, paid_timeout, special_timeout, free_approval_required, paid_approval_required, special_approval_required, is_default, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('description', 'length', 'max'=>255),
			array('price', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, price, free_limit, paid_limit, special_limit, free_timeout, paid_timeout, special_timeout, free_approval_required, paid_approval_required, special_approval_required, is_default, status', 'safe', 'on'=>'search'),
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
			'employers' => array(self::HAS_MANY, 'Employer', 'scheme_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'price' => 'Price',
			'free_limit' => 'Free Limit',
			'paid_limit' => 'Paid Limit',
			'special_limit' => 'Special Limit',
			'free_timeout' => 'Free Timeout',
			'paid_timeout' => 'Paid Timeout',
			'special_timeout' => 'Special Timeout',
			'free_approval_required' => 'Free Approval Required',
			'paid_approval_required' => 'Paid Approval Required',
			'special_approval_required' => 'Special Approval Required',
			'is_default' => 'Is Default',
			'status' => 'Status',
		);
	}

	/**
	 * Retrive list of all values for display in dropdownlist
	 * @return array of id and values
	 */
	function getAll()
	{
		$list_data = array();
		$list_query = $this->findAll();
		foreach ($list_query as $row)
		{
			$list_data[$row->id] = $row->name;
		}
		return $list_data;
	}

	/**
	 * Retrive the name of the id specified
	 * @return string name if found or empty string if not found
	 */
	function getName($item_id)
	{
		$item_data = $this->findByPk($item_id);
		if ($item_data)
			return $item_data->name;
		else
			return '';
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('free_limit',$this->free_limit);
		$criteria->compare('paid_limit',$this->paid_limit);
		$criteria->compare('special_limit',$this->special_limit);
		$criteria->compare('free_timeout',$this->free_timeout);
		$criteria->compare('paid_timeout',$this->paid_timeout);
		$criteria->compare('special_timeout',$this->special_timeout);
		$criteria->compare('free_approval_required',$this->free_approval_required);
		$criteria->compare('paid_approval_required',$this->paid_approval_required);
		$criteria->compare('special_approval_required',$this->special_approval_required);
		$criteria->compare('is_default',$this->is_default);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}