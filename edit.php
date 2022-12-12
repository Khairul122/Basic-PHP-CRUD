<!DOCTYPE html>
<html>

<head>
  <title>Edit Page</title>
</head>

<body>
  <?php include 'menu.php' ?>
  <?php
  $pid = $_GET['id_barang'];
  //connection
  include 'conn.php';
  //select specific record
  $query = mysqli_query($conn, "SELECT * FROM product WHERE id_barang = $pid") or die('Query Error');
  $row = mysqli_fetch_array($query) or die('fetch Error');
  ?>

  <fieldset>
    <legend>Edit Form</legend>
    <form action="save_changes.php" method="POST">
      <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
      <label>Nama Barang:</label> <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" required="">
      <hr />
      <label>Harga :</label> <input type="number" name="harga" min="1" value="<?php echo $row['harga']; ?>" required="">
      <hr />
      <input type="submit" value="Save Changes">
    </form>
  </fieldset>

</body>

</html>