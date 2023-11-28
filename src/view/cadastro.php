<?php
include "/xampp/htdocs/dus/src/controller/header_cadastro.php";
include MODEL . "/user.php";
include MODEL . "/database.php";

// Variável para validar se os dados foram enviados
$count = 0;

// Recebimento dos dados do formulário
if (isset($_POST["user"])) {
    $user = $_POST["user"];
    $count++;
} else {
    $user = null;
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $count++;
} else {
    $email = null;
}

if (isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $count++;
} else {
    $pass = null;
}

if (isset($_POST["country"])) {
    $country = $_POST["country"];
    $count++;
} else {
    $country = null;
}

if (isset($_POST["gender"])) {
    $gender = $_POST["gender"];
    $count++;
} else {
    $gender = null;
}

if ($count >= 2) {
    // Instanciando classe Database
    $db = new Database();

    // Utilizando prepared statement para evitar injeção de SQL
    $sql = "INSERT INTO usuarios(usuario, senha, email, pais, genero) VALUES (:user, :pass, :email, :country, :gender)";

    // Passando parâmetros para a função insert
    $result = $db->insert($sql, array(
        'user' => $user,
        'pass' => $pass,
        'email' => $email,
        'country' => $country,
        'gender' => $gender
    ));

    if ($result) {
        header("Refresh: 0; url=" . ROOT);
    } else {
        echo "Erro ao inserir no banco de dados.";
    }
}
?>
<body>
    <div id="background"></div>
    <section class="container-login">
    <div class="login">
        <div>
            <img src="<?= ASSETS ?>/img/Logo Dus.png" alt="logo">
        </div>

        <form method="post">
            <input type="text" name="user" id="user" placeholder="Usuario" autofocus required>
            <input type="email" name="email" id="pass" placeholder="Email" required>
            <input type="password" name="pass" id="pass" placeholder="Senha" required>
        <select name="country" id="country" required>
            <option value="country" name="country" disabled selected hidden>País</option>
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
        <select name="gender" id="gender" required>
            <option value="gender" name="gender" disabled selected hidden>Gênero</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
            <input type="submit" name="submit" value="CRIAR MINHA CONTA" required>
            <p>Ja passue uma conta?<a href="<?= ROOT ?>/index.php">Entre agora</a></p>
        </form>
    </div>
    </section>
</body>
</html>

<?php
include "/xampp/htdocs/dus/src/controller/footer.php"; 