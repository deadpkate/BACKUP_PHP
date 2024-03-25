<?php
	// utk membuat sambungan kpd database pelayan
	$con = mysqli_connect('localhost', 'root', '', 'sistem_rekod_suhu')
	or die("unable to connect to db..");
?>