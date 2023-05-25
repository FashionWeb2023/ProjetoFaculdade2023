<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilizacao/telaLogin.css" rel="stylesheet">
    <link href="../estilizacao/css-geral.css" rel="stylesheet">
    <title>Outfits</title>
</head>
<body>
    <main>
        <section>
            <h1>Outfits</h1>
            <img src="../img/choosing-clothes-animate.svg" alt="choosing-clothes">
        </section>
        <form action="../config/configLogin.php" method="POST">
            <div class="input-login-senha">
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="input-login-senha">
                <input class="btn-login" type="password" name="senha" placeholder="Senha"  >
            </div>

            <div class="botao-nav">
                <input class="btn-opcoes" type="submit" name="submit" value="Enviar">
            </div>

            <div class="linha"></div>

            <div class="botao-nav">
                <a href="cadastroLogin.php" class="btn-opcoes">Cadastrar</a>
            </div>

            <div class="botao-nav">
                <a href="../index.php" class="btn-opcoes">Voltar</a>
            </div>
        </form>
    </main>
    
</body>
</html>