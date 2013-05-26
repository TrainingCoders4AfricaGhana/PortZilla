<?php

/**
 * Extending CWebUser 
 */
class WebUser extends CWebUser {

    private $_model;

    protected function loadUser($id = null) {
        if ($this->_model === null) {
            if ($id !== null)
                $this->_model = User::model()->findByPk($id);
        }
        return $this->_model;
    }

    public function isAdmin() {
        $user = $this->loadUser(Yii::app()->user->id);
        return intval($user->is_admin) == 1;
    }

}

?>
