<?php
require_once('controller/base_controller.php');

class PagesController extends BaseController{
	function __construct(){
		$this->folder = 'pages';
	}
	public function home(){
		$data = array(
			'name'=> 'Le Quoc Khanh',
			'age'=> '22'
		);
		$this->render('home', $data);
	}
	public function error(){
		$this->render('error');
	}
}