<?php

include('connection.php');

$kd = $_GET['kd'];
$sql = "DELETE FROM sediaan WHERE kode='$kd'";
$result = mysqli_query($con, $sql);
if ($result) {
  header("location:selectSediaan.php");
} else {
  echo "Query Error : " . mysqli_error($con);
}

?>