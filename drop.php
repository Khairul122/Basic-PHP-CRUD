<?php
 $pid = $_GET['id_barang'];
 //connection
 include 'conn.php';
 //delete query
 mysqli_query($conn,"DELETE FROM product WHERE id_barang = $pid") or die('Query Error');
 echo "Record Removed!";
 echo "<a href='read.php'>Click here</a>";
