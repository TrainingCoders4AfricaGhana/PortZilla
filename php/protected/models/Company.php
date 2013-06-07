<?php

/**
 * This is the model class for table "{{company}}".
 *
 * The followings are the available columns in table '{{company}}':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $contact_person
 * @property string $city
 * @property string $country
 * @property string $region
 * @property string $address
 * @property string $website
 *
 * The followings are the available model relations:
 * @property Agent[] $agents
 * @property Consignee[] $consignees
 * @property Shipper[] $shippers
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return '{{company}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    array('name, contact_person, country', 'required'),
			array('name, phone, contact_person, city, country, region, address, website', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, phone, contact_person, city, country, region, address, website', 'safe', 'on'=>'search'),
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
			'agents' => array(self::HAS_MANY, 'Agent', 'company_id'),
			'consignees' => array(self::HAS_MANY, 'Consignee', 'company_id'),
			'shippers' => array(self::HAS_MANY, 'Shipper', 'company_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Company Name',
			'phone' => 'Phone',
			'contact_person' => 'Contact Person',
			'city' => 'City',
			'country' => 'Country',
			'region' => 'Region',
			'address' => 'Address',
			'website' => 'Website',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('website',$this->website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}