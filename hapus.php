<?php
include 'koneksi.php';
$id_tanggapan = $_GET['id_pembayaran'];
$query = "delete from pembayaran where id_pembayaran='$id_pembayaran'";
mysqli_query($koneksi, $query);
header("location:tblbayar.php")
?>