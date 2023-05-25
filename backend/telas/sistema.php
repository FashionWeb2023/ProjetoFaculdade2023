<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilizacao/telaSistema.css" rel="stylesheet">
    <link href="../estilizacao/css-geral.css" rel="stylesheet">
    <title>Cadastro de produtos</title>
</head>
<body>
    <main>
        <header>
            <?php
                echo "<h2>Bem vindo(a) <i>$logado</i><h2>";
            ?>
        </header>
        
        <section>
            <div class="opcoes">
                <a href="consultar.php">Consultar</a>
            </div>

            <div class="opcoes">
                <a href="cadastroProdutos.php">Cadastrar Produtos</a>
            </div>

            <div class="opcoes">
                <a href="alterar.php">Alterar</a>
            </div>

            <div class="opcoes">
                <a href="deletar.php">Deletar</a>
            </div>

            <div class="opcoes">
            <a href="../config/deslogar.php">Sair</a>
            </div>
        </section>
        
    </main>
    
</body>
</html>