<?php
include "/xampp/htdocs/dus/src/controller/header.php";

//Importação dos arquivos que contém as classes User e Database
include MODEL . "/user.php";
include MODEL . "/database.php";

//Importando arquivo que verifica se a sessão está "ligada".
//Caso esteja, redireciona o usuário para a página de perfil
include CONTROLLER . "/session_on.php";

//Criando objeto da classe Database
$db = new Database();

//Selecionar todos os registros da tabela
//users
$listUsers = $db->select(
    "SELECT * FROM usuarios"
);

if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            //é apresentado um alert javascript
            echo "<script> alert('AUTENTICADO! ✅') </script>";
            //é criada uma sessão com os dados do objeto retornado
            $_SESSION["user"] = $user->getObject();
            //e então somos redirecionados para a pagina de perfil
            //var_dump($_SESSION["user"]);
            header("Refresh: 0; URL = ".VIEW."/profile.php");
        } else {
            echo "<script> alert('ACESSO NEGADO! ❌') </script>";
        }
    }

    
?>

<body>
   
    <div id="background"></div>
    <section class="container-login">
    <div class="login" id="login">
        <div>
        <img src="assets/img/Logo Dus.png" alt="logo">
        </div>

        <form method="post">
            <input type="text" name="user" id="user" placeholder="Usuario" autofocus>
            <input type="password" name="pass" id="pass" placeholder="Senha">
            <input type="submit" value="Entrar">
        </form>
        
        <p>Ainda nao tem uma conta?<a href="src/view/cadastro.php">Crie agora</a></p>
    </div>
    </section>

</body>
</html>