<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h3> Cadastro de Usuários</h3><br>
				<form action="arquivoUsuarios.php" method="GET"> 
					<label> Nome do Usuário </label><br>
					<input type="text" class="form-control" name="nomeUsuario" placeholder="Nome Usuario"><br><br>

					<label> Email </label><br>
					<input type="text" class="form-control" name="emailUsuario" placeholder="E-Mail"><br><br>

					<label> Telefone Celular </label><br>
					<input type="text" class="form-control" name="telefoneUsuario" placeholder="Telefone Celular"><br><br>

					<label> Idade </label><br>
					<input type="text" class="form-control" name="idadeUsuario" placeholder="Idade"><br><br>

					<button class="btn btn-primary"> Cadastrar Usuário </button>
				</form>
			</div>
		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>		

</body>
</html>