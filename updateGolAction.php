<?php

  include('connection.php');
  if(isset($_POST['update'])){
    $kd = $_POST['kode'];
    $nm = $_POST['nama'];

    $sql = "UPDATE golongan SET nama='$nm' WHERE kode='$kd'";
    $result = mysqli_query($con, $sql);
    if($result){
      header("location: selectGolongan.php");
    }
    else{
      echo "Query Error : ". mysqli_error($con);
    }
  }
  else{
    echo "<b>Anda harus mengakses dari <a href='updateGolongan.php'>Form Update</a></b>";
  }

?>