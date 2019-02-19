<?php 
include_once "Interface.php";
/**
 * 
 */
class square implements Resizeable{
	private $canh;
	// public function getCanh(){
	// 	$this->canh= $canh;
	// }
	public function setCanh($new_canh){
		$this->canh = $new_canh;
	}
	public function getArea(){
		return pow($this->canh, 2);
	}
	public function resize($percent){
		$this->canh *= sqrt($percent/100+1);
	}
}
 ?>