<?php
if(empty($_POST['nama'])){
    header("Location:kosong.php");
    //Output : Jika input nama kosong maka akan ke halaman kosong.php
}
else {
    echo "<center> Nama : ".$_POST['nama']."</center><br>";
    //Output : Jika input nama terisi maka akan muncul hasil nama
}
?>