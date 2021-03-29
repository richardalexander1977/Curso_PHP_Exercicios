<?php
	#recebe os dados do formulario
	$dados = $_GET;

	# transforma o array em string
	$dados = implode(" - ", $dados);

    # criar um arquivo txt
	$arquivo = fopen("usuarios.txt", "a+");

    # escrevendo os dados do produto no arquivo
	fwrite($arquivo, $dados."\n");

    # fechar o arquivo
	fclose($arquivo);

    #redirecionar para a tabela com a listagem
	header("location: listaUsuarios.php");

?>