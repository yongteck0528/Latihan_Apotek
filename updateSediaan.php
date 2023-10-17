<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Sediaan</title>
</head>

<body>
  <h1>Update Sediaan</h1>
  <hr>
  <?php
  include('connection.php');
  $kd = $_GET['kd'];
  $sql = "SELECT * FROM sediaan WHERE kode='$kd'";
  $result = mysqli_query($con, $sql);
  while ($data = mysqli_fetch_array($result)) {
    ?>
    <form action="updateSedAction.php" method="POST">
      <table border="0" cellspacing="5">
        <tr>
          <td><input type="text" size="50" name="kode" placeholder="kode" value="<?= $data['kode']; ?>" readonly></td>
        </tr>
        <tr>
          <td><input type="text" size="50" name="nama" placeholder="nama" value="<?= $data['nama']; ?>" required></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="update" value="Update">
            <input type="reset" value="Clear">
            <input type="button" value="Cancel" onclick="window.location.href='selectSediaan.php'">
          </td>
        </tr>
      </table>
    </form>
  <?php } ?>

</body>

</html>