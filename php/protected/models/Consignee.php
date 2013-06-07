<?php

/**
 * This is the model class for table "{{consignee}}".
 *
 * The followings are the available columns in table '{{consignee}}':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $company_id
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Shipment[] $shipments
 */
class Consignee extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Consignee the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{consignee}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(            
            array('first_name, last_name', 'required'),
            array('first_name, last_name', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, first_name, last_name, company_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
            'shipments' => array(self::HAS_MANY, 'Shipment', 'consignee_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            //'company_id' => 'Company',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('company_id', $this->company_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

      //returns all of the Consignee values in a list format
    public function getAllConsignees() {
        return CHtml::listData(Consignee::model()->findAll(), 'id', 'first_name', 'last_name');
    }
}