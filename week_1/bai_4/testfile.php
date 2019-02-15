<?php  
/**
 * 
 */
class user{
	public $userName;
	public $userId;
	public $email;
	public $passWord;
	function __construct($userName,$userId,$email,$passWord){
		$this->username=$userName;
		$this->userid= $userId;
		$this->email= $email;
		$this->password= $passWord;
	}
}
/**
 * 
 */
class Admin extends user{
	public $accessLevel;
	function __construct($userName,$userId,$email,$passWord,$accessLevel){
		parent::__construct($userName,$userId,$email,$passWord);
		$this->accessLevel= $accessLevel;
	}
}
?>