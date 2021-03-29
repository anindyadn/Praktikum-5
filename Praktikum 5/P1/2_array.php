<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
    </head>
    <body>
        <?php
        //array dengan variable nama
            $nama[] = "Anindya"; //0
            $nama[] = "Dewi"; //1
            $nama[] = "Nariswari"; //2
            echo $nama[1] . $nama[2] . $nama[0];
            //Output : nama yang muncul akan sesuai array = Dewi Nariswari Anindya
            echo "<br>";
        ?>
    </body>
</html>