<?php
include '../koneksi/koneksi.php';
$ID           =$_POST['id'];
$name         =$_POST['name'];
$email        =$_POST['email'];
$pass    	  =$_POST['password'];

$sql = "UPDATE users SET name = '$name', email = '$email', password = '$pass' WHERE id = '$ID' ";
mysqli_query($konek,$sql);
header('location:indexuser.php');

