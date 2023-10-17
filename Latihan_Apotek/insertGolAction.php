<?php

  include('connection.php');
  if(isset($_POST['insert'])){
    $kd = $_POST['kode'];
    $nm = $_POST['nama'];

    $sql = "INSERT INTO golongan (kode,nama) VALUES ('$kd', '$nm')";
    $result = mysqli_query($con, $sql);
    if($result){
      header("location: selectGolongan.php");
    }
    else{
      echo "Query Error : ". mysqli_error($con);
    }
  }
  else{
    echo "<b>Anda harus mengakses dari <a href='insertGolongan.php'>Form Insert</a></b>";
  }

?>