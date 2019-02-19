<?php 
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";


$hinhTron= new circle();
$hinhTron->setBanKinh(5);
echo $hinhTron->getArea()."<br/>";

for ($i=0;$i<3;$i++) {
	$percent = mt_rand(1,100);
	$hinhTron->resize($percent);
	echo "$percent%: ".$hinhTron->getArea()."<br/>";
}


$hinhChuNhat= new rectangle();
$hinhChuNhat->setDai(9);
$hinhChuNhat->setRong(5);
echo $hinhChuNhat->getArea()."<br/>";

for ($i=0;$i<3;$i++) {
	$percent = mt_rand(1,100);
	$hinhChuNhat->resize($percent);
	echo "$percent%: ".$hinhChuNhat->getArea()."<br/>";
}


$hinhVuong = new square();
$hinhVuong->setCanh(10);
echo $hinhVuong->getArea()."<br>";

for ($i=0;$i<3;$i++) {
	$percent = mt_rand(1,100);
	$hinhVuong->resize($percent);
	echo "$percent%: ".$hinhVuong->getArea()."<br/>";
}
?>