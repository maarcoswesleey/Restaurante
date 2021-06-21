<?php 
@session_start();
if(@$_SESSION['nivel'] != 'Recepcionista'){
	echo "<script language='javascript'> window.location='../' </script>";
	exit();
 }
 ?>
