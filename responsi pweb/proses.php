<html>
    <head>
        <style>
            h1 {
                color: white;
            }
        </style>
        <body style="background-color: #2b3e59 ;">
            <h1><center>Terima Kasih Sudah Memesan di Rental Mobil Sumber Makmur<br></center></h1>
            <center><a style="color: white;" href=index.php> Ke Menu Utama</a><br></center>
            <center><a style="color: white;" href=lihat.php> Daftar Pemesan </a><br></center>
        </body>
    </head>
</html>

<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$mobil = $_POST['mobil'];
	echo "<head><title>Rental Mobil</title></head>";
	$fp = fopen("rental.txt","a+");
	fputs($fp,"$nama|$email|$mobil\n");
	fclose($fp);
?>