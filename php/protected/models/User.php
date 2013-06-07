<?php

/**
 * This is the user class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $user_name
 * @property string $password
 * @property string $date_registered
 * @property integer $is_active
 * @property integer $is_admin
 * @property string $time_stamp
 * @property integer $person_id
 *
 * The followings are the available user relations:
 * @property Person $person
 */
class User extends TimestampActiveRecord {

    public $_password;
    public $_password_repeat;
    //Some other peson related attributes
    public $person_fname;
    public $person_lname;
    public $person_email;
    public $person_address;
    public $person_phone;

    /**
     * Returns the static user of the specified AR class.
     * @param string $className active record class name.
     * @return User the static user class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_user';
    }

    /**
     * @return array validation rules for user attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('is_active, is_admin', 'numerical', 'integerOnly' => true),
            array('user_name, _password', 'length', 'max' => 45),
            array('_password', 'compare'),
            array('user_name, person_email', 'unique'),
            array('user_name, _password', 'required'),
            array('_password_repeat', 'safe'),            
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('person_fname, person_lname, user_name, 
                date_registered, is_active, is_admin, time_stamp, person_email, person_address',
                'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_name' => 'User Name',
            '_password' => 'Password',
            '_password_repeat' => 'Repeat Password',
            'is_admin' => 'Is Account Admin',
            'person_fname' => 'First Name',
            'person_lname' => 'Last Name',
            'person_phone' => 'Phone Number',
            'person_email' => 'Email',
            'person_address' => 'Address',
        );
    }

    /**
     * Retrieves a list of users based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the users based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        //$criteria->compare('id', $this->id);
        $criteria->compare('user_name', $this->user_name, true);
        //$criteria->compare('password', $this->password, true);
        $criteria->compare('date_registered', $this->date_registered, true);
        //$criteria->compare('is_active', $this->is_active);
        $criteria->compare('is_admin', $this->is_admin);
        $criteria->compare('time_stamp', $this->time_stamp, true);
        $criteria->compare('person.email', $this->person_email, true);
        $criteria->compare('person.first_name', $this->person_fname, true);
        $criteria->compare('person.last_name', $this->person_lname, true);
        $criteria->compare('person.phone', $this->person_phone, true);
        $criteria->compare('person.address', $this->person_address, true);

        $criteria->with = array('person');

        $sort = new CSort;
        $sort->attributes = array(
            'person_fname' => array(
                'asc' => 'person.first_name',
                'desc' => 'person.first_name DESC',
            ),
            'person_lname' => array(
                'asc' => 'person.last_name',
                'desc' => 'person.last_name DESC',
            ),
            'person_email' => array(
                'asc' => 'person.email',
                'desc' => 'person.email DESC',
            ),
            'person_phone' => array(
                'asc' => 'person.phone',
                'desc' => 'person.phone DESC',
            ),
            'person_address' => array(
                'asc' => 'person.address',
                'desc' => 'person.address DESC',
            ),
            '*',
        );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => $sort,
        ));
    }

    /**
     * @return an encrypted version of the user password
     */
    public function hash($value) {
        return crypt($value);
    }

    /**
     * Encryption function for storing passwords
     */
    protected function beforeSave() {
        if (parent::beforeSave()) {
            $this->password = $this->hash($this->_password);
            return true;
        }
        return false;
    }

    /**
     * Check password against encrypted value
     */
    public function check($value) {
        $new_hash = crypt($value, $this->password);
        if ($new_hash == $this->password) {
            return true;
        }
        return false;
    }

}