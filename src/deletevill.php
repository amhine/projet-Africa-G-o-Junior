
<?php
include './cnxdb.php';
$id_ville = $_GET["id_ville"];
$sql = "DELETE FROM `ville` WHERE id_ville = $id_ville";

$rsulta = mysqli_query($connect, $sql);

if ($rsulta) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}
?>