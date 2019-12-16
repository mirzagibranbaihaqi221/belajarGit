<?php

include '../koneksi/koneksi.php';

$name  =$_POST['name'];
$email =$_POST['email'];
$pass  =md5($_POST['password']);

$sql   ="INSERT into users (name ,email ,password) values ('$name','$email','$pass')";
mysqli_query($konek,$sql);
header('location:indexuser.php');