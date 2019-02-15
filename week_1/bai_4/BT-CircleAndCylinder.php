<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	

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
		echo "bán kính: ".$this->radius." có màu: ".$this->color."<br> diện tich: ".$this->area()."<br>";
	}
}
$test= new Circle(9,"xanh");
$test->toString();
class Cylinder extends Circle{
	public $height;
	public function __construct($radius,$color,$height){
		parent::__construct($radius,$color);
		parent::area();
		$this->height= $height;
	}
	public function volume(){
		return $this->height*3.14*$this->area();
	}
	public function toString(){
		echo "bán kính: ".$this->radius." có màu: ".$this->color."<br> thể tích: ".$this->volume();
	}
}
$test2 =new Cylinder(8,"đỏ",20);
$test2->toString();
?>
</body>
</html>