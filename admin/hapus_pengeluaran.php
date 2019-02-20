<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($conn, "delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");

 ?>