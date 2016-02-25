<?php 
include "../koneksi.php";

$username = isset($_POST['username']) ? $_POST['username']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";
$email = isset($_POST['email']) ? $_POST['email']:"";

if ($email == "" || $password == "" || $username == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO user (username,password,email) values ('$username','$password','$email')");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=user';
 </script>

 <?php  
 }
 ?>