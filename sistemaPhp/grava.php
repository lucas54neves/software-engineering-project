<?php
	include("conecta.php");
	
	$recnome=$_GET["fnome"];
	$recemail=$_GET["femail"];
	$recmsg=$_GET["fmsg"];
	
	mysqli_query($conexao, "insert into dados (nome, email, msg) values ('$recnome','$recemail','$recmsg')");
	header("location:lista.php");
?>
