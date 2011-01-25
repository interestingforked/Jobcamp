<?php

class CandidateIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$record = Candidate::model()->findByAttributes(array('username' => $this->username));
		if ($record === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} else if ($record->password_hash !== md5($this->password)) {
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		} else {
			$this->_id = $record->id;
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
}

?>
