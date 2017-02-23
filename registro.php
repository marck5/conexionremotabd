<?php
	$servidor="localhost";
	$usuario="root";
	$pws="";
	$bd="servicios";
	$conn=mysqli_connect($servidor,$usuario,$pws,$bd)or die("Error al conectar...".mysqli_error());
?>