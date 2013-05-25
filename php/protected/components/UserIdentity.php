<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

    public function authenticate() {
        $user = User::model()->findByAttributes(array('user_name' => $this->username));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else {
            if ($user->check($this->password)) {
                $this->_id = $user->id;
                if (null === $user->time_stamp) {
                    $lastLogin = time();
                } else {
                    $lastLogin = strtotime($user->time_stamp);
                }
                $this->setState('time_stamp', $lastLogin);
                $this->errorCode = self::ERROR_NONE;
            }
            else
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

    /*
      public function authenticate()
      {
      $users=array(
      // username => password
      'demo'=>'demo',
      'admin'=>'admin',
      );
      if(!isset($users[$this->username]))
      $this->errorCode=self::ERROR_USERNAME_INVALID;
      elseif($users[$this->username]!==$this->password)
      $this->errorCode=self::ERROR_PASSWORD_INVALID;
      else
      $this->errorCode=self::ERROR_NONE;
      return !$this->errorCode;
      }* */
}