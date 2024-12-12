<?php
$host = 'localhost';
$dbname = 'africa géo-junior';
$username = 'root';
$password = '';

// Créer la connexion MySQLi
$connect = mysqli_connect($host, $username, $password, $dbname);
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";
  ?>