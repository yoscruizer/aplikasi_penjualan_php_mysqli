<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($conn, "delete from barang where id='$id'");
header("location:barang.php");

?>