<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek - Golongan</title>
</head>

<body>
  <h1>Insert Golongan</h1>
  <hr/>
  <form action="insertGolAction.php" method="post">
    <table border="0" cellspacing="5">
      <tr>
        <td><input type="text" size="50" name="kode" placeholder="kode" required/></td>
      </tr>
      <tr>
        <td><input type="text" size="50" name="nama" placeholder="nama" required/></td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="insert" value="insert"/>
          <input type="reset" value="clear">
          <input type="button" value="cancel" onclick="window.location.href='selectGolongan.php'">
        </td>
      </tr>
    </table>
  </form>

</body>

</html>