<html>
    <head>
        <style>
            table {
                background-color: #2b3e59;
                color: white;
            }
        </style>
        <body style="background-color: #c5d3ea ;">
        <h1><center>DAFTAR PEMESAN</center></h1>
        <center><a href = index.php><b>::KE MENU UTAMA::</b></a></center>
        </body>
    </head>
</html>

<?php
	echo "<head><title>Rental Mobil</title></head>";
	$fp = fopen("rental.txt","r");
	echo "<table border=0>";
	echo "<hr>";
	echo "<table border ='1' align='center' width='70%'>";
	echo "<tr><td>Nama</td><td>Email</td><td>Mobil</td></tr>";

	while ($isi = fgets($fp))
	{
		$pisah = explode("|",$isi);
		echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td></tr>";
	}

	echo "</table>";
	
?>