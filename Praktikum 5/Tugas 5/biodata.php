<html>
    <head>
        <title> Biodata </title>
    </head>
    <body>
        <?php
        echo "<h2> Biodata </h2>";
        //menampilkan header2 text Biodata
        echo "Nama : ".$_POST['nama']."<br>";
        //Output : Nama : (nama yang dimasukan)
        echo "Jenis Kelamin : ".$_POST['gender']."<br>";
        //Output : Jenis Kelamin : (Jenis kelamin yang dipilih)
        echo "Asal Kota : ".$_POST['kota']."<br>";
        //Output : Kota : (kota yang dimasukan)
        echo "Tanggal Lahir : ".$_POST['ttl']."<br>";
        //Output : Tanggal lahir : (tanggal lahir yang dimasukan)
        echo "Alamat : ".$_POST['alamat']."<br>";
        //Output : Alamat : (Alamat yang dimasukan)
        echo "Email : ".$_POST['email']."<br>";
        //Output : Email : (Email yang dimasukan)
        echo "Program Studi : ".$_POST['prodi']."<br>"
        //Output : Program Studi : (Program Studi yang dimasukan)
        ?>
    </body>
</html>