<?php
$host = 'localhost';
$dbname = 'africa géo-junior';
$username = 'root';
$password = '';


$connect = mysqli_connect($host, $username, $password, $dbname);
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}else{
echo "Connected successfully";}
  ?>

  