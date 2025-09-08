<?php 
include 'config.php';
$id =$_GET['id'];

$query = "Delete from mahasiswa where id=$id";
mysqli_query($koneksi, $query);

header("Location: index.php");
?>