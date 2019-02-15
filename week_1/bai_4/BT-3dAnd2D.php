<?php
/**
  * 
  */
 class Point2D{
 	private $x;
 	private $y;
 	function __construct($x,$y){
 		$this->x= 0;
 		$this->y= 0;
 	}
 	function getX(){
 		return $this->x;
 	}
 	function getY(){
 		return $this->y;
 	}
 	function setX($new_x){
 		$this->x= $x;
 	}
 	function setY($new_y){
 		$this->y= $y;
 	}
 } 
?>