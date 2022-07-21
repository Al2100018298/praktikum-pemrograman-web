<?php
	$host = 'localhost';
	$user = 'id19240917_pendaftaran';
	$pass = '@Pweb308298()';
	$database = 'id19240917_tugaspweb';

	$koneksi = mysqli_connect($host,$user,$pass,$database);

	if($koneksi -> connect_error) {
		die("Database tidak terkoneksi".$koneksi -> connect_error);
	}

?>