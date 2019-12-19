<?php
include '../koneksi/koneksi.php';
$ID  = $_GET['id'];

$sql = "DELETE FROM post WHERE id ='$ID'";
mysqli_query($konek,$sql);
header('location:index.php');
?>