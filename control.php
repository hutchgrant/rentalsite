<?php

class ccValidate {

	function validate($args){


		include('config.php');
		if(!$args['captcha']){
		  return false;
		}
		$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$args['captcha']), true);
		if($response['success'] == true)
		{
			 if($this->getAndValidateName($args['fName']) &&
				$this->getAndValidateName($args['lName']) &&
				$this->getAndValidatePhone($args['telNum']) &&
				$this->getAndValidateEmail($args['email']) &&
				$this->getAndValidateDate($args['dateOfBirth']) &&
				$this->getAndValidateAllName($args['school']) &&
				$this->getAndValidateAllName($args['program']) &&
				$this->getAndValidateYear($args['year']) &&
				$this->getAndValidateDate($args['moveInDate']) &&
				$this->getAndValidateNum($args['contract']) &&
				$this->getAndValidateBudget($args['budget']) &&
				$this->getAndValidateAllName($args['nextOfKin']) &&
				$this->getAndValidatePhone($args['telKin']) &&
				$this->getAndValidateComment($args['comment'])) 
			{
				return true;
			} 
		}
		return false; 
	}

	function getAndValidateName($arg){
	 	if(!empty($arg)){
				if(preg_match("/[A-Z]{3,30}/i", $arg)) {
					return true;
				}else{
					echo "invalid name";
				}
		}
		return false;
	}
	function getAndValidateAllName($arg){
	 	if(!empty($arg)){
				if(preg_match("/[A-Z]{3,30}/i", $arg)) {
					return true;
				}else{
					echo "invalid name";
				}
		}
		return false;
	}
	function getAndValidatePhone($arg){
	 	if(!empty($arg)) {
				if(preg_match("/^\d{10}/", $arg)) {
					return true;
				}else{
					echo "invalid phone";
				}
		}
		return false;
	}
	function getAndValidateEmail($arg){
	 	if(!empty($arg)) {
				if (filter_var($arg, FILTER_VALIDATE_EMAIL)) {
				  return true;
				}else{
					echo "invalid email";
				}
		}
		return false;
	}
	function getAndValidateDate($arg){
	 	if(!empty($arg)) {
				if (preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/",$arg)) {
				  	return true;
				}else{
					if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/",$arg)){
				  		return true;
					}else{
						echo "invalid date";
					}
				}
		}
		return false;
	}
	function getAndValidateNum($arg){
		if(!empty($arg) || $arg == 0) {
			if(preg_match("/^\d/", $arg)) {
				return true;
			}else{
				echo "invalid number";
			}
		}
		return false;
	}
	function getAndValidateYear($arg){
		if(!empty($arg)) {
			if(preg_match("/^\d(\+)?/", $arg)) {
				return true;
			}else{
				echo "invalid number";
			}
		}
		return false;
	}
	function getAndValidateBudget($arg){
		if(!empty($arg)) {
			if(preg_match("/^[0-9]+-[0-9]+$/", $arg)) {
				return true;
			}else{
				echo "invalid number";
			}
		}
		return false;
	}
	function getAndValidateComment($arg){
		if(!empty($arg)) {
			if(preg_match("/^([0-9a-zA-Z' \:\;\,\.\!\?\r\n-]{2,300})$/", $arg)) {
				return true;
			}else{
				echo "invalid character";
			}
		}
		return false;
	} 
}

?>
