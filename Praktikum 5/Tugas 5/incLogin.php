<?php
if(empty($_POST['nama'])) {
    header("Location:redLogin.php");
    //jika input nama tidak terisi akan menuju halaman redLogin.php
}
elseif (empty($_POST['email'])){
    header("Location:redLogin.php");
    //jika input email tifak terisi akan menuju halaman redLogin.php
}
else {
echo "<center> Nama : ".$_POST['nama']."</center><br>";
//menampilkan nama dari input text nama
echo "<center> Email : ".$_POST['email']."</center><br>";
//menampilkan email dari input text email
date_default_timezone_set("Asia/Jakarta");
//agar menampilkan waktu sesuai di indonesia
echo "<center> Tanggal login : <br>";
echo date("l d-F-Y, h:i:s a");
//menampilkan hari tanggal dan jam akses
echo "</center><br>";
}
?>