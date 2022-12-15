<?php
session_start();
include 'admin/Model/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query    = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
$runquery = $link->query($query);

if($runquery->num_rows > 0){
 $_SESSION['email'] = $email;
 	echo'<script language="javascript">';
    echo'alert("Anda Berhasil Login.")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL= admin/index.php">';
} else {
 echo'<script language="javascript">';
    echo'alert("Gagal Login. Silahkan Coba Lagi.")';
    echo'</script>';
    echo'<META HTTP-EQUIV="Refresh" Content="0; URL= index.html">';
}

?>