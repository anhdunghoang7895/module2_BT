<?php
include_once "Interface.php";
/**
  * 
  */
 class rectangle implements Resizeable{
 	private $dai;
 	private $rong;
 	// public function getDai(){
 	// 	$this->dai= $dai;
 	// }
 	// public function getRong(){
 	// 	$this->rong= $rong;
 	// }
 	public function setDai($new_dai){
 		$this->dai= $new_dai;
 	}
 	public function setRong($new_rong){
 		$this->rong= $new_rong;
 	}
 	public function getArea(){
		return $this->dai* $this->rong;
	}
	public function resize($percent){
		$this->dai *= sqrt($percent/100+1);
		$this->rong *= sqrt($percent/100+1);
	}
 } 
 
 ?>