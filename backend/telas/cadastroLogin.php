<?php

    if(isset($_POST['submit']))
    {

         //print_r('Nome: ' . $_POST['nome']);
         //print_r('<br>');
         //print_r('Email: ' . $_POST['email']);
         //print_r('<br>');
         //print_r('Telefone: ' . $_POST['senha']);
         //print_r('<br>');
         //print_r('Sexo: ' . $_POST['genero']);
         //print_r('<br>');
         //print_r('Data: ' . $_POST['data_nascimento']);
         //print_r('<br>');
         //print_r('Cidade: ' . $_POST['cpf']);
         //print_r('<br>');
         //print_r('Estado: ' . $_POST['telefone']);
         //print_r('<br>');
         //print_r('Endereço: ' . $_POST['endereco']);
         //print_r('<br>');
         //print_r('Bairro: ' . $_POST['bairro']);
         //print_r('<br>');
         //print_r('Estado: ' . $_POST['estado']);
         //print_r('<br>');
         //print_r('Cidade: ' . $_POST['cidade']);

        include_once('../config/conexao.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       $sexo = $_POST['genero'];
       $data_nasc = $_POST['data_nascimento'];
       $cpf = $_POST['cpf'];
       $telefone = $_POST['telefone'];
       $endereco = $_POST['endereco'];
       $bairro = $_POST['bairro'];
       $estado = $_POST['estado'];
       $cidade = $_POST['cidade'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,sexo,data_nasc,cpf,telefone,endereco,bairro,estado,cidade) 
      VALUES ('$nome','$email','$senha','$sexo','$data_nasc','$cpf','$telefone','$endereco','$bairro','$estado','$cidade')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilizacao/formularioLogin.css" rel="stylesheet">
    <link href="../estilizacao/css-geral.css" rel="stylesheet">
    <title>Outfits</title>
</head>
<body>
    <main>
        <header>
            <h1>Outfits</h1>
            <img src="../img/choosing-clothes-animate.svg" alt="choosing-clothes">
        </header>

        <form action="cadastroLogin.php" method="POST">
        <h2>Cadastro de Login</h2>
                <div class="textfield">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome"  required>
                </div>

                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>

                <div class="sexo">
                    <p>Sexo</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                </div>
            
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>

                <div class="textfield">
                    <label for="cpf">Insira seu CPF sem pontos ou traço</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Cpf"  required>
                </div>

                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone"  >
                </div>

                <div class="textfield">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Endereço"  required>
                </div>

                <div class="textfield">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Bairro"  >
                </div>

                <div class="textfield">
                    <label for="Estado">Estado</label>
                    <input type="text" name="estado" id="estado" placeholder="Estado"  >
                </div>

                <div class="textfield">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade"><br><br>
                
                <div class="botao-nav">
                    <input type="submit" class="botao-opcoes" name="submit" id="submit">
                </div>
                
                <a href="../index.php" class="botao-opcoes">Voltar</a>
        </form>
    </main>
</body>
</html>