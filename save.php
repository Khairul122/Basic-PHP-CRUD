<?php include 'menu.php' ?>
<?php
if (empty($_POST['nama_barang']) || empty($_POST['harga'])) {
	echo "All fields are required!";
} else {

	$nama_barang = $_POST['nama_barang'];
	$harga = $_POST['harga'];

	include 'conn.php';
	//insert query
	mysqli_query($conn, "INSERT INTO product(nama_barang,harga)VALUES('$nama_barang','$harga')") or die('Query Error');

	//message
	echo "Record Saved!";
}

?>