<?php
namespace test;
class NhanVienBD
{
  public $connection;

  public function __construct($connection)
  {
    $this->connection = $connection;
  }

  public function create($nhanvien){
    $sql = "INSERT INTO 'nhanvien'('hoten', 'diaChi', 'email','soDienThoai') VALUES (?, ?, ?, ?)";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $nhanvien->hoten);
    $statement->bindParam(2, $nhanvien->diaChi);
    $statement->bindParam(3, $nhanvien->email);
    $statement->bindParam(4, $nhanvien->soDienThoai);
    return $statement->execute();
  }
}
?>