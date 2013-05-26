<?php

abstract class TimestampActiveRecord extends CActiveRecord {

    protected function beforeValidate() {
        if ($this->isNewRecord) {
            //set the date registered
            $this->date_registered = new CDbExpression('NOW()');
        } 
        return parent::beforeValidate();
    }

}

?>
