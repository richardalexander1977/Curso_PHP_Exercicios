<?php
	#recebe os dados do formulario
	$dados = $_POST;

	# transforma o array em string
	$dados = implode(" - ", $dados);

    # criar um arquivo txt
	$arquivo = fopen("produtos.txt", "a+");

    # escrevendo os dados do produto no arquivo
	fwrite($arquivo, $dados."\n");

    # fechar o arquivo
	fclose($arquivo);

    #redirecionar para a tabela com a listagem
	header("location: listaProdutos.php");

?>