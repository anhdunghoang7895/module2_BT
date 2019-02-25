<?php
namespace Controller;

use Customer;
use CustomerDB;
use DBConnection;

class CustomerController
{

  public $customerDB;

  public function __construct()
  {
      $connection = new DBConnection("mysql:127.0.0.1", "root", "");
      $this->customerDB = new CustomerDB($connection->connect());
  }

  public function add()
  {
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          include 'view/add.php';
      } else {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $address = $_POST['address'];

          $customer = new Customer($name, $email, $address);
          $this->customerDB->create($customer);
          $message = 'Customer created';
          include 'view/add.php';
      }
  }
}