<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
    </head>
    <body>
        <?php
            $nama[] = "Anindya"; //0
            $nama[] = "Dewi"; //1
            $nama[] = "Nariswari"; //2
            echo $nama[1] . $nama[2] . $nama[0];
            //Output : nama yang muncul akan sesuai array = Dewi Nariswari Anindya
            echo "<br>";
            $jum_array = count($nama);
            //menghitung jumlah array
            echo "Jumlah elemen array = ".$jum_array
            //Output : hasil jumlah array
        ?>
    </body>
</html>