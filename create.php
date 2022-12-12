<!DOCTYPE html>
<html>

<head>
	<title>Add Page</title>
</head>

<body>
	<?php include 'menu.php' ?>

	<fieldset>
		<legend>Add Form</legend>
		<form action="save.php" method="POST">
			<label>Nama Barang :</label> <input type="text" name="nama_barang" required="">
			<hr />
			<label>Harga :</label> <input type="number" name="harga" min="1" required="">
			<hr />
			<input type="submit" value="Save">
		</form>
	</fieldset>

</body>

</html>