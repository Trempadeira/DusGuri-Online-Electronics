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
    
    <link rel="stylesheet" type="text/css" href="meuPerfil.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <h2>Usuário: <?php echo $user_id; ?></h2>
    <h2>Nome: <?php echo $user_name; ?></h2>
    <!-- Adicione outros campos de informações aqui -->
</div>
    </section>
        
        
</body>
</html>