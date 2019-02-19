<?php  
abstract class animal{
	public $name;
	public function getName($name){
		$this->name = $name;
	}
	public abstract function displayName();
	public abstract function makeSound();
}
?>