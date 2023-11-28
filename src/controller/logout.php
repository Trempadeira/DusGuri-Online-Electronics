<?php

include "/xampp/htdocs/dus/src/controller/header.php";

session_destroy();

echo "<p>Finalizando sessão...</p>";

header("Refresh: 2; url = ".ROOT);

include "/xampp/htdocs/dus/src/controller/footer.php";