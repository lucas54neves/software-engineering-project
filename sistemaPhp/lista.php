<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
	<h1 class = "titulo" > Listagem de Dados Cadastrados</h1>
	<table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding ="10">
		<tr>
			<td><strong>NOME</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>MENSAGEM</strong></td>
		</tr>
	<?php
		include("conecta.php");
		$seleciona=mysqli_query($conexao, "select * from dados order by id desc");
		while($campo=mysqli_fetch_array($seleciona)){?>
			<tr>
				<td><?=$campo["nome"]?></td>
				<td><?=$campo["email"]?></td>
				<td><?=$campo["msg"]?></td>
			</tr>
	
	<?php }?>
	</table>
</body>

</html>
