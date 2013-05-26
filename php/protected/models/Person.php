<?php

/**
 * This is the person class for table "tbl_person".
 *
 * The followings are the available columns in table 'tbl_person':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 *
 * The followings are the available person relations:
 * @property User[] $users
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static person of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static person class
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
		return 'tbl_person';
	}

	/**
	 * @return array validation rules for person attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, email, phone, address', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, email, phone, address', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'address' => 'Address',
		);
	}

	/**
	 * Retrieves a list of persons based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the persons based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}