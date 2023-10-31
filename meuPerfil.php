<?php
session_start(); // Inicie a sessão
include ('protect.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/meuPerfil.css?v1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="imagex/png" href="assets/css/img/Logo Dus.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    <div id="background"></div>
    <section class="infoEsquerda">
        <div class="inform">
        <nav>
            <a href="#" id="Pedidos">Pedidos</a>
            <a href="#" id="Comprados">Itens comprados</a>
            <a href="#" id="Favoritos">Favoritos</a>
            <a href="#" id="Pagamento">Pagamento</a>
            <a href="#" id="Pedidos">Historico</a>
            <a href="#" id="Privacidade">Privacidade e segurança</a>
            <a href="logout.php" id="sair">SAIR</a>

        </div>

<div class="informa">
    <h1>Meu Perfil</h1>
    <h2>Usuário: <?php echo $usuario; ?></h2>
    <h2>Nome: <?php echo $nome; ?></h2>
</div>
    </section>
        
        
</body>
</html>