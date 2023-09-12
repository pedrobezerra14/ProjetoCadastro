<?php
	$ID = $_GET['CODIGO'];
  	include_once 'conexao.php';
  	mysqli_query($conexao,"DELETE FROM cad_alunos WHERE ID = $ID");
  	header('location: relacao.php');

  ?>