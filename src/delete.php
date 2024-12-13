<?php
include './cnxdb.php';
$id_pays = $_GET["id_pays"];
$sql = "DELETE FROM `pays` WHERE id_pays = $id_pays";
$resultas = mysqli_query($connect, $sql);

if ($resultas) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}

?>