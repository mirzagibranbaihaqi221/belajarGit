<?php
include '../koneksi/koneksi.php';
$ID  = $_GET['id'];

$sql = "DELETE FROM users WHERE id ='$ID'";
mysqli_query($konek,$sql);
header('location:indexuser.php');
?>