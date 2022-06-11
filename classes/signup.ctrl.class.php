<?php
/**
 *  
 */
class SignUpCtrl{
	private $uid;
	private $pwd;
	private $pwdrepeat;
	private $email;

	public function __construct($uid,$pwd,$pwdrepeat,$email){
		$this->uid = $uid;
		$this->pwd = $pwd;
		$this->pwdrepeat = $pwdrepeat;
		$this->email = $email;

	}

	public function emptyInput(){
		if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)){
			return false;
		}else{
			return true;
		}

	}

	public function invalidEmail(){
		if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}
	}

	public function pwMatch(){
		if($this->pwd == $this->pwdrepeat."a"){
			return true;
		}else{
			return false;
		}

	}

}