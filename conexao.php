<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'base3b';
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

		if($conexao == false){
			echo "NÃO FOI POSSIVEL REALIZAR CONEXÃO COM O SERVIDOR";
		}
?>