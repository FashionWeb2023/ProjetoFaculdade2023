<?php
    session_start();
    include_once('../config/conexao.php');

    $sql = "SELECT * FROM produtos ORDER BY idProdutos DESC";
    $result = $conexao->query($sql);

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM produtos WHERE idProdutos LIKE '%$data%' OR nome LIKE '%$data%' ORDER BY idProdutos DESC";
    } else {
        $sql = "SELECT * FROM produtos ORDER BY idProdutos DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produtos</title>
    <link href="../estilizacao/telaAlterar.css" rel="stylesheet">
    <link href="../estilizacao/css-geral.css" rel="stylesheet">
</head>
<body>
    <main>
        <nav>
            <div class="navegar">
                <input type="search" id="pesquisar" placeholder="Insira um código ou nome...">
                <button onclick="searchData()">Pesquisar</button>
            </div>

            <div class="navegar">
                <a href="sistema.php"><button class="btn-opcoes">Voltar</button></a>
            </div>
        </nav>
    
        <section>
            <table border="1">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($dados = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $dados['idProdutos'] . "</td>";
                            echo "<td>" . $dados['nome'] . "</td>";
                            echo "<td>" . $dados['marca'] . "</td>";
                            echo "<td>" . $dados['preco'] . "</td>";
                            echo "<td>" . $dados['descricao'] . "</td>";
                            echo "<td><a href='editar.php?idProdutos=$dados[idProdutos]'><img src='../img/alterar.png'></a></td>";
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

<script>
    var search = document.getElementById('pesquisar');
    function searchData(){
        window.location = 'consultar.php?search='+search.value;
    }
</script>
</html>