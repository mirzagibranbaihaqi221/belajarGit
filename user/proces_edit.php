<?php
include '../koneksi/koneksi.php';
$ID           =$_POST['id'];
$name         =$_POST['name'];
$email        =$_POST['email'];
$pass    	  =$_POST['password'];


$data ="SELECT * FROM users WHERE id ='$ID'";
$result =mysqli_connect($konek,$data);
$row    =mysqli_fetch_row($result);
$pas    =$row[3];

if (empty($pass)) {
	$pass  =$pas;
}else{
	$pass  =md5($_POST['password']);
}


$sql = "UPDATE users SET name = '$name', email = '$email', password = '$pass' WHERE id = '$ID' ";
mysqli_query($konek,$sql);
header('location:indexuser.php');

