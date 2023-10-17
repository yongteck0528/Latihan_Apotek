<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek - Golongan</title>
</head>

<body>
  <h1>Data Golongan</h1>
  <hr/>
  <a href="index.php" style="text-decoration: none">
    <img src="icon/back.ico" width="20" height="20" title="Back to Home" align="top" />
    <font color="brown">Back to Home</font>
  </a>
  <br /><br />

  <a href="insertGolongan.php" style="text-decoration: none">
    <img src="icon/add.ico" width="20" height="20" title="Insert" align="top" />
    <font color="brown">Insert</font>
  </a>
  <br /><br />

  <table border="1">
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php

    include 'connection.php';
    $sql = "SELECT * FROM golongan";
    $result = mysqli_query($con, $sql) or die(mysqli_error($sql));
    if (mysqli_num_rows($result) > 0) {
      while ($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td>
            <?= $data['kode']; ?>
          </td>
          <td>
            <?= $data['nama']; ?>
          </td>
          <td align="center">
            <?=
              "<a href = 'updateGolongan.php?kd=" . $data['kode'] . "'>
              <img src='icon/edit.ico' width='20' height='20' title='edit'/></a>
              <a href = 'deleteGolongan.php?kd=" . $data['kode'] . "'>
              <img src='icon/delete.ico' width='20' height='20' title='delete'/></a>"
              ?>
          </td>
        </tr>
        <?php
      }
    } else {
      ?>
      <tr>
        <td colspan="3" align="center"><i>Data Belum Ada</i></td>
      </tr>

      <?php
    }

    ?>

  </table>

</body>

</html>