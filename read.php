<!DOCTYPE html>
<html>

<head>
	<title>View Products</title>
</head>

<body>
	<?php include 'menu.php' ?>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama Barang</td>
			<td>Harga</td>
			<td colspan="2">{Option}</td>
		</tr>

		<?php
		//connection
		include 'conn.php';
		//view query
		$query = mysqli_query($conn, "SELECT * FROM product order by id_barang desc") or die('Query Error!');
		$no = 1;
		while ($row = mysqli_fetch_array($query)) {
			$pid = $row['id_barang'];
			echo "<tr>";
			echo "<td>" . $no++ . "</td>";
			echo "<td>" . $row['nama_barang'] . "</td>";
			echo "<td>" . $row['harga'] . "</td>";
			echo "<td><a href='drop.php?id_barang=$pid'>Drop</a></td>";
			echo "<td><a href='edit.php?id_barang=$pid'>Edit</a></td>";
			echo "</tr>";
		}
		?>

	</table>
</body>

</html>