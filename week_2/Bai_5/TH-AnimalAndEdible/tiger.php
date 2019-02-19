<?php  
include_once "animal.php";
/**
 * 
 */
class Tiger extends animal
{
	
	public function makeSound()
	{
		echo "saudhasdaoisdjodas<br>";
	}
	public function displayName()
	{
		echo "asdsadasdsad<br>";
	}
}

$tiger= new tiger();
$tiger->makeSound();
$tiger->displayName();
?>