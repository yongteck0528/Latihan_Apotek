<?php

include('connection.php');

$kd = $_GET['kd'];
$sql = "DELETE FROM golongan WHERE kode='$kd'";
$result = mysqli_query($con, $sql);
if ($result) {
  header("location:selectGolongan.php");
} else {
  echo "Query Error : " . mysqli_error($con);
}

?>