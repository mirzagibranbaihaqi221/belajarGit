<?php
include '../koneksi/koneksi.php';
$ID               =$_POST['id'];
$author           =$_POST['author'];
$title            =$_POST['title'];
$content    	  =$_POST['content'];
$status			  =$_POST['status'];

$sql = "UPDATE post SET author = '$author', title = '$title', content = '$content', status = '$status' WHERE id = '$ID'";
mysqli_query($konek,$sql);
header('location:index.php');

