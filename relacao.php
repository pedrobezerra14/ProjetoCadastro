<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Relação de Alunos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="Bootstrap/css/bootstrap.css"> 
	<style>

        @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala&display=swap');

		body {
			background: #c31432; 
            background: -webkit-linear-gradient(to right, #c31432, #240b36); 
            background: linear-gradient(to right, #c31432, #240b36);
        }
		

		.container {
			margin-top: 100px;
		}

        h2{
           font-family: 'Sarala', sans-serif;	
           margin-top: 20px;
           padding-top: 10px;
           text-align: center;
           margin-bottom: 20px;
           padding-bottom: 10px;
           font-size: 70px;
           background-color: #ffffff;
           box-shadow: 2px 2px 2px  #00000080;
           border-radius: 2px;
}

		.table {
			background-color: 	#ffffff;
		}

		.table th,
		.table td {
			text-align: center;
			vertical-align: middle;
		}

		#lixo{
			width: 30px;
			height:30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="mb-6">Relação de Alunos Cadastrados</h2>
		<table class="table table-hover table-borderless">
			<thead class="thead-dark">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>ENDEREÇO</th>
					<th>BAIRRO</th>
					<th>CIDADE</th>
					<th>ESTADO</th>
					<th>SEXO</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once 'conexao.php';

					$dados = "SELECT ID, NOME, ENDERECO, BAIRRO, CIDADE, ESTADO, SEXO FROM cad_alunos";

					$resposta = mysqli_query($conexao, $dados);

					while ($linha = mysqli_fetch_array($resposta)) {
						echo "<tr>
								<td>$linha[ID]</td>
								<td>$linha[NOME]</td>
								<td>$linha[ENDERECO]</td>
								<td>$linha[BAIRRO]</td>
								<td>$linha[CIDADE]</td>
								<td>$linha[ESTADO]</td>
								<td>$linha[SEXO]</td>

								<td>
									<a href='EXCLUIR.php?CODIGO=$linha[ID]'>
										<img id='lixo' src='IMG/lixo.png' alt='Excluir'/>
									</a>

								<a href='EDITAR.php?CODIGO=$linha[ID]'>
								   <img id=''/>Alterar
                        </a>

								</td>
                        </tr>
								";

					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
