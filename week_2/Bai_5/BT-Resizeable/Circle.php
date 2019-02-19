<?php 
include_once "Interface.php";
/**
 * 
 */
class circle implements Resizeable{
	private $banKinh;
	public function getBanKinh(){
		$this->banKinh = $banKinh;
	}
	public function setBanKinh($new_banKinh){
		$this->banKinh = $new_banKinh;
	}
	public function getArea(){
		return pi()*pow($this->banKinh,2);
	}
	public function resize($percent){
		 
		$this->banKinh *= sqrt($percent/100+1);
	}
}

 ?>
