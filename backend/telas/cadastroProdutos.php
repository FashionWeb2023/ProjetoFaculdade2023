<?php
    if(isset($_POST['submit'])) {
        include_once('../config/conexao.php');

       $nome = $_POST['nome'];
       $marca = $_POST['marca'];
       $preco = $_POST['preco'];
       $descricao = $_POST['descricao'];

       $result = mysqli_query($conexao, "INSERT INTO produtos(nome,marca,preco,descricao) VALUES ('$nome','$marca','$preco','$descricao')");
           
       header('Location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilizacao/telaCadastroProdutos.css" rel="stylesheet">
    <link href="../estilizacao/css-geral.css" rel="stylesheet">
    <title>Outfits</title>
</head>
<body>
    <main>
        <form action="cadastroProdutos.php" method="POST">
            <h2>Cadastro de Produtos</h2>
            <div class="textfield">
                <input type="text" name="nome" id="nome" placeholder="Nome"  required>
            </div>

            <div class="textfield">
                <input type="text" name="marca" id="marca" placeholder="Marca" required>
            </div>

            <div class="textfield">
                <input type="text" name="preco" id="preco" placeholder="Preço" required>
            </div>

            <div class="textfield">
                <input type="descricao" name="descricao" id="descricao" placeholder="Descrição"  required>
            </div>             
            
            <div class="botao-nav">
                <input type="submit" name="submit" id="submit" class="botao-opcoes">
            </div>

            <div class="btn-voltar">
                <a href="sistema.php" class="botao-opcoes">Voltar</a>
            </div>
        </form>
    </main>
</body>
</html>