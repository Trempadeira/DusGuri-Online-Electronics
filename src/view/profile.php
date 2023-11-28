<?php
include "/xampp/htdocs/dus/src/controller/header_perfil.php";

session_start();
include MODEL . "/user.php";
include MODEL . "/database.php";

include CONTROLLER . "/session_off.php";

session_reset();

$u = $_SESSION["user"];

var_dump($u);

if( isset($_GET["user"]) ) {
    $user = $_GET["user"];
} else {
    $user = null;
}

if( isset($_GET["email"]) ) {
    $email = $_GET["email"];
} else {
    $email = null;
}

?>

<div id="background"></div>
<section class="infoEsquerda">
    <div class="inform">
        <nav>
            <a href="#" id="Pedidos">Pedidos</a>
            <hr width="85%;">
            <a href="#" id="Comprados">Itens comprados</a>
            <hr width="85%;">
            <a href="#" id="Favoritos">Favoritos</a>
            <hr width="85%;">
            <a href="#" id="Pagamento">Pagamento</a>
            <hr width="85%;">
            <a href="#" id="Pedidos">Historico</a>
            <hr width="85%;">
            <a href="#" id="Privacidade">Privacidade e segurança</a>
            <hr width="85%;">
            <a href='<?= ROOT ?>/src/controller/logout.php'>SAIR</a>
        </nav>
    </div>

    <div class="informa">
        <h1>Meu Perfil</h1>
        <h2>Usuário: <br> <?= $_SESSION["user"]->getUser() ?></h2>
        <h2>Email: <br> <?= $_SESSION["user"]->getEmail() ?>
        <h2>Senha: <br> <?= $_SESSION["user"]->getEmail() ?>
        <h2>Telefone: <br> <?= $_SESSION["user"]->getEmail() ?>
        <h2>Endereço: <br> <?= $_SESSION["user"]->getEmail() ?>
        <h2>Data de nascimento: <br> <?= $_SESSION["user"]->getEmail() ?>
        <h2>Genêro: <br> <?= $_SESSION["user"]->getEmail() ?>
        <img class="imagem1" src="<?= ASSETS ?>/img/LogoEscrita.png" width="160" alt="logo">
    </div>
</section>

<?php
include "/xampp/htdocs/dus/src/controller/footer.php";
?>
