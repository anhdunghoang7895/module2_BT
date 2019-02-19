<?php 
include_once "animal.php";
include_once "edible.php";
/**
  * 
  */
class chicken extends animal implements edible
{

	public function makeSound()
	{
		echo "quack<br>";
	}
	public function displayName()
	{
		echo "chicken<br>";
	}
	public function howToEat()
	{
		echo "cook it<br>";
	}
} 
$chicken= new chicken();
$chicken->makeSound();
$chicken->displayName();
$chicken->howToEat();
?>