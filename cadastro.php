<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];

    $checkQuery = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($mysqli, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "Este email ja esta cadastrado.";
    } else {
        $insertQuery = "INSERT INTO usuarios (usuario, email, senha, genero, pais) 
                        VALUES ('$usuario', '$email', '$senha', '$genero', '$pais')";

        if (mysqli_query($mysqli, $insertQuery)) {
            header('Location: index.php');
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
}


?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="Cadastro.css?v=1.0">
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
            <input type="text" name="usuario" placeholder="Usuario" autofocus required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <label for="cars"></label>
        <select name="cars" id="cars" required>
            <option value="" disabled selected hidden>Escolha um país</option>
            <option value="afeganistao">Afeganistão</option>
            <option value="albania">Albânia</option>
            <option value="alemanha">Alemanha</option>
            <option value="argentina">Argentina</option>
            <option value="australia">Austrália</option>
            <option value="brasil">Brasil</option>
            <option value="canada">Canadá</option>
            <option value="china">China</option>
            <option value="egito">Egito</option>
            <option value="espanha">Espanha</option>
            <option value="franca">França</option>
            <option value="india">Índia</option>
            <option value="inglaterra">Inglaterra</option>
            <option value="italia">Itália</option>
            <option value="japao">Japão</option>
            <option value="mexico">México</option>
            <option value="portugal">Portugal</option>
            <option value="russia">Rússia</option>
            <option value="suecia">Suécia</option>
            <option value="suica">Suíça</option>
            <option value="tailandia">Tailândia</option>
            <option value="turquia">Turquia</option>
            <option value="uruguai">Uruguai</option>
            <option value="venezuela">Venezuela</option>
            <option value="vietna">Vietnã</option>
        </select>
            <input type="text" name="genero" placeholder="Genero" required>
            <input type="submit" name="submit" value="CRIAR MINHA CONTA" required>
            <p>Ja passue uma conta?<a href="index.php">Entre agora</a></p>
        </form>
    </div>
    </section>
</body>
</html>