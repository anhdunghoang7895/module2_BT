<?php 
include_once "edible.php";
/**
 * 
 */
class fruit implements edible
{
	
	public function howToEat(){
		echo "bite<br>";
	}
}
$apple = new fruit();
$apple->howToEat();
 ?>