<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <style> 

        @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala&display=swap');

         body {
            background: #c31432; 
            background: -webkit-linear-gradient(to right, #c31432, #240b36); 
            background: linear-gradient(to right, #c31432, #240b36);}

         h2{
           font-family: 'Sarala', sans-serif;
           font-size: 50px;
           text-align: center;
           margin-bottom: 20px;
           }

       .card{
          margin:auto;
          justify-content:center;
          width: 800px;
          margin-top: 100px;
          background-color: #ffffff;
          padding: 80px;
          box-shadow: 2px 2px 2px 2px #00000080;
          margin-bottom: 100px;
}
    </style>
</head>
<body>
    <div class="card">
        <h2 class="mb-2">Cadastro de Alunos</h2><br>

            <form method="POST" autocomplete="off">
                <div class="row">

                <div class="col-md-14 mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome Completo   "required>
                </div>

                <div class="col-md-14 mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Digite Seu Endereço" required>
                </div>

                <div class="col-md-14 mb-3">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control"placeholder="Digite Seu Bairro" required>
                </div>

                <div class="col-md-14 mb-3">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control"placeholder="Digite sua Cidade" required>
                </div>

                <div class="col-md-14 mb-3">
                    <label>Estado</label></br>
               <select name="estado" class="form-control" required>
                    <option value="" disabled selected>Escolha o Estado</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                    <option>DF</option>
               </select>
                </div>

                <div class="col-md-14 mb-3">
                    <label>Sexo </label>
                    <select name="sexo" class="form-control" required>
                        <option value="" disabled selected>Escolha o Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>

                    </select>
                    <br>
                </div>
 </div>
            <div class="botao">
             <input type="submit" name="salvar" value="SALVAR" class="btn btn-outline-success btn-lg" />
</div>
         </form>
        
       </div>
      </div>
     </div>
    </body>
</html>

    
<?php
if (isset($_POST['salvar'])) 
            { 
                $nome = $_POST["nome"];
                $endereco = $_POST["endereco"];
                $bairro = $_POST["bairro"];
                $cidade = $_POST["cidade"];
                $estado = $_POST["estado"];
                $sexo = $_POST["sexo"];     


    include_once 'CONEXAO.PHP';


    $inserir = "INSERT INTO cad_alunos (NOME, ENDERECO, BAIRRO, CIDADE, ESTADO, SEXO)
            VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$estado', '$sexo')";

    $res = mysqli_query($conexao,$inserir);
}
  
?>