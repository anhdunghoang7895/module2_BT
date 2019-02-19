<?php 

include_once('Colorable.php');
/**
 * 
 */
class rectangle {
	private $a;
	private $b;
	public function rectangle($a,$b) {
		$this->a = $a;
		$this->b = $b;
	}
	public function getArea() {
		return $this->a*$this->b;
	}
}
class square implements colorable{
	private $canh;
	private $name;
	public function square($name,$canh) {
		$this->name = $name;
		$this->canh = $canh;
			}
	public function setCanh($new_canh){
		$this->canh = $new_canh;
	}
	public function getArea(){
		return pow($this->canh,2);
	}
	public function howToColor(){
		echo "color all four sides";
	}
}
 ?>