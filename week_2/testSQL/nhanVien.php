<?php
namespace test;
class NhanVien
{
  public $id;
  public $hoten;
  public $diaChi;
  public $email;
  public $soDienThoai;
  public function __construct($hoten,$diaChi,$email,$soDienThoai)
  {
    $this->hoten= $hoten;
    $this->diaChi= $diaChi;
    $this->email = $email;
    $this->soDienThoai = $soDienThoai;
  }
}