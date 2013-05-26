<?php

/**
 * This is the model class for table "{{shipment}}".
 *
 * The followings are the available columns in table '{{shipment}}':
 * @property integer $id
 * @property string $arrival_date
 * @property string $departure_date
 * @property string $country_of_loading
 * @property string $country_of_discharge
 * @property string $commodity
 * @property string $type
 * @property string $bulk_cargo
 * @property integer $port_id
 * @property integer $container_id
 * @property integer $shipper_id
 * @property integer $consignee_id
 * @property integer $agent_id
 *
 * The followings are the available model relations:
 * @property Agent $agent
 * @property Consignee $consignee
 * @property Container $container
 * @property Port $port
 * @property Shipper $shipper
 */
class Shipment extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Shipment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{shipment}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('port_id, container_id, shipper_id, consignee_id, agent_id', 'required'),
            array('port_id, container_id, shipper_id, consignee_id, agent_id', 'numerical', 'integerOnly' => true),
            array('country_of_loading, country_of_discharge, commodity', 'length', 'max' => 45),
            array('type, bulk_cargo', 'length', 'max' => 6),
            array('arrival_date, departure_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, arrival_date, departure_date, country_of_loading, country_of_discharge, commodity, type, bulk_cargo, port_id, container_id, shipper_id, consignee_id, agent_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'agent' => array(self::BELONGS_TO, 'Agent', 'agent_id'),
            'consignee' => array(self::BELONGS_TO, 'Consignee', 'consignee_id'),
            'container' => array(self::BELONGS_TO, 'Container', 'container_id'),
            'port' => array(self::BELONGS_TO, 'Port', 'port_id'),
            'shipper' => array(self::BELONGS_TO, 'Shipper', 'shipper_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'arrival_date' => 'Arrival Date',
            'departure_date' => 'Departure Date',
            'country_of_loading' => 'Country Of Loading',
            'country_of_discharge' => 'Country Of Discharge',
            'commodity' => 'Commodity',
            'type' => 'Type',
            'bulk_cargo' => 'Bulk Cargo',
            'port_id' => 'Port',
            'container_id' => 'Container',
            'shipper_id' => 'Shipper',
            'consignee_id' => 'Consignee',
            'agent_id' => 'Agent',
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
        $criteria->compare('arrival_date', $this->arrival_date, true);
        $criteria->compare('departure_date', $this->departure_date, true);
        $criteria->compare('country_of_loading', $this->country_of_loading, true);
        $criteria->compare('country_of_discharge', $this->country_of_discharge, true);
        $criteria->compare('commodity', $this->commodity, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('bulk_cargo', $this->bulk_cargo, true);
        $criteria->compare('port_id', $this->port_id);
        $criteria->compare('container_id', $this->container_id);
        $criteria->compare('shipper_id', $this->shipper_id);
        $criteria->compare('consignee_id', $this->consignee_id);
        $criteria->compare('agent_id', $this->agent_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getTypeOptions() {
        return array(
            1 => 'Export',
            2 => 'Import',
        );
    }
    
    public function getBCargoOptions() {
        return array(
            1 => 'Dry',
            2 => 'Liquid',
        );
    }

}