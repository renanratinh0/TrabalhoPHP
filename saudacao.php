<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
<?php
    session_start();
    echo "Usuário cadastrado com sucesso! </br>";
    echo "Bem-vindo ao ROMLL, " . $_SESSION["user"] . "!";
?>
    </br>
    <a href="testaux.php">Voltar para a página inicial</a> </br> 
    <a href="entrar.php">Logar na conta</a> 
    </body>
</html>