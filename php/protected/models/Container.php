<?php

/**
 * This is the model class for table "{{container}}".
 *
 * The followings are the available columns in table '{{container}}':
 * @property integer $id
 * @property integer $weight
 * @property integer $height
 * @property integer $length
 * @property string $type
 * @property integer $vessel_id
 * @property string $identification_code
 *
 * The followings are the available model relations:
 * @property Vessel $vessel
 * @property Shipment[] $shipments
 */
class Container extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Container the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{container}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('vessel_id, identification_code', 'required'),
            array('weight, height, length, vessel_id', 'numerical', 'integerOnly' => true),
            array('type', 'length', 'max' => 17),
            array('identification_code', 'length', 'max' => 30),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, weight, height, length, type, vessel_id, identification_code', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'vessel' => array(self::BELONGS_TO, 'Vessel', 'vessel_id'),
            'shipments' => array(self::HAS_MANY, 'Shipment', 'container_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'weight' => 'Weight',
            'height' => 'Height',
            'length' => 'Length',
            'type' => 'Type',
            'vessel_id' => 'Vessel',
            'identification_code' => 'Identification Code',
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
        $criteria->compare('weight', $this->weight);
        $criteria->compare('height', $this->height);
        $criteria->compare('length', $this->length);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('vessel_id', $this->vessel_id);
        $criteria->compare('identification_code', $this->identification_code, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    //return a list of all container types
    public function getTypeOptions() {
        return array(
            1 => 'Refridgerated',
            2 => 'Not Refridgerated',
        );
    }

    //
    public function getAllContainers() {
        return CHtml::listData(Container::model()->findAll(), 'id', 'identification_code');
    }

}