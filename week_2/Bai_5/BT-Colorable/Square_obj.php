<?php 
include_once "Square.php";

$shapeArray=  array(new square('hinh1',3),
					new rectangle(3,4)
);

foreach ($shapeArray as $shape) {
	echo $shape->getArea()."<br/>";
	if ($shape instanceof colorable) {
		$shape->howToColor()."<br/>";
	}
}
 ?>
