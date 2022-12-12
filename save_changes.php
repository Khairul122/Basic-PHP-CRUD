<?php include 'menu.php' ?>
<?php
if (empty($_POST['nama_barang']) || empty($_POST['harga'])) {
	echo "All fields are required!";
} else {

	$nama_barang = $_POST['nama_barang'];
	$harga = $_POST['harga'];
	$id_barang = $_POST['id_barang'];

	include 'conn.php';
	//insert query
	mysqli_query($conn, "UPDATE product SET nama_barang ='$nama_barang', harga ='$harga' WHERE id_barang = $id_barang") or die('Query Error');

	//message
	echo "Record Changed!";
	echo "<a href='read.php'>Click here</a>";
}

?>