<?php 
namespace controller;
use test\DBConnection;
use test\NhanVien;
use test\NhanVienBD;

class Controller{
	public $NhanVienBD;
	public function __construct(){
		$connection = new DBConnection("mysql:127.0.0.1","root","");
		$this->NhanVienBD = new NhanVienBD($connection->connect());
	}
	public function add()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			include 'view/add.php';
		} else {

			$name = $_POST['hoten'];
			$address = $_POST['diaChi'];
			$email = $_POST['email'];
			$phone = $_POST['soDienThoai'];

			$nhanvien = new NhanVien($name,$address , $email, $phone);
			$this->NhanVienBD->create($NhanVien);
			$message = 'nhân viên nhập thành công';
			include 'view/add.php';
		}
	}
}
?>
