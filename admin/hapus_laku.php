<?php 
include 'config.php';
$id=$_GET['id'];
$jumlah=$_GET['jumlah'];
$nama=$_GET['nama'];

$a=mysqli_query($conn, "select jumlah from barang where nama='$nama'");
$b=mysqli_fetch_array($a);
$kembalikan=$b['jumlah']+$jumlah;
$c=mysqli_query($conn, "update barang set jumlah='$kembalikan' where nama='$nama'");
mysqli_query($conn, "delete from barang_laku where id='$id'");
header("location:barang_laku.php");

 ?>