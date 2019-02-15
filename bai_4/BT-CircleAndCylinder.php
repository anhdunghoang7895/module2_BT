<?php  
/**
 * 
 */
class Circle{
	public $radius;
	public $color;
	public function __construct($radius,$color){
		$this->radius= $radius;
		$this->color= $color;
	}
	public function area(){
		return (pow($this->radius,2)*3.14);
	}
	public function toString(){
		echo "bán kính: ".$this->radius." có màu: ".$this->color."<br> diện tich: ".$this->area();
	}
}
$test= new Circle(9,"xanh");
$test->toString();
class Cylinder extends Circle{
	public $height;
	public function __construct($radius,$color,$height){
		parent::__construct($radius,$color);
		$this->height= $height;
	}
	public function toString(){
		echo "bán kính: ".$this->radius." có màu: ".$this->color;
	}
}
?>