<?php

	$produtos = file("usuarios.txt");

	//Gerar o CSV

	$produtocsv = fopen("usuarios.csv", "w");

	foreach ($produtos as $cliente) {
		$item = explode(" - ",str_replace("\n","",$cliente));
		fputcsv($produtocsv, $item);
	}

	fclose($produtocsv);

	$produtocsv = fopen("usuarios.csv", "r");

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista Usuários</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<hr>
				<h3> Lista de Usuários Cadastrado </h3><br>

				<table class="table">
					<thead>
						<th> Nome Usuário </th>
						<th> E-Mail </th>
						<th> Telefone Celular </th>
						<th> Idade </th>
					</thead>

					<tbody>
						<?php 

						$row = 0;

						while ( ($item = fgetcsv($produtocsv,0,",")) !== FALSE) {
							
							if ($row++ == 0) {
						}

						?>
							<tr>
								<td><?=$item[0];?></td>
								<td><?=$item[1];?></td>
								<td><?=$item[2];?></td>
								<td><?=$item[3];?></td>
							</tr>

						<?php } ?>

					</tbody>
				</table>	
				<a href="cadastroUsuario.php" class="btn btn-primary"> Cadastrar Usuários </a>
			</div>	
		</div>		
    </div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>		

</body>
</html>