<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="hasilkirim.php">
            <!membuat form>
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <!membuat tabel form>
                <tr>
                    <td width="130"> Nama </td>
                    <td> <input type="text" name="nama"> </td>
                    <!menampilkan input text nama>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnLogin" value="Kirim">
                        <!menampilkan button submit "Kirim">
                        <input type="reset" name="reset" value="Reset">
                        <!menampilkan button reset "Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>