<?php
include('conexao.php');

if (isset($_POST['usuario']) && isset($_POST['senha'])) {

    if (empty($_POST['usuario'])) {
        echo "Preencha seu usuário";
    } elseif (empty($_POST['senha'])) {
        echo "Preencha sua senha";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: meuPerfil.php");
        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    
    <title>DNL's Drinks</title>
</head>
<body>
   
    <div id="background"></div>
    <section class="container-login">
    <div class="login">
        <div>
            <img src="Logo (1).png" alt="logo">
        </div>

        <form method="post">
            <input type="text" name="usuario" placeholder="Usuario" autofocus>
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Entrar">
        </form>
        
        <p>Ainda nao tem uma conta?<a href="cadastro.php">Crie agora</a></p>
    </div>
    </section>
       <script src="index.js"></script>
</body>
</html>