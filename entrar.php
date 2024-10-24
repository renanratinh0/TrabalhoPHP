<?php
    session_start();
?>
<html>
    <head> 
        <title>Logar</title>
    </head>
    <body>
        <font size="5"><a href="testaux">Home</a></font>
        <font size="5"><a href="cadastro.php">Cadastrar</a></font>
        <font size="5"><a href="entrar.php">Entrar</a></font>
        <hr></br>

        <?php
            if (isset($_SESSION["login"]) && $_SESSION["login"] == "s") {
                echo "Você já está logado " . $_SESSION["parahome"];
        ?>
        <br/>
        <a href="logoutt.php">Sair da conta</a>
        <?php
            } else {
        ?>

        <center>
        <form action="loginevent.php" method="POST">
            <label for="usr">Usuário:</label> 
            <input type="text" id="usr" name="usu"><br/>
            <label for="pwd">Senha:</label> 
            <input type="password" id="pwd" name="sen"><br/>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
        <a href="cadastro.php">Não possui cadastro?</a>
        </center>

        <?php
            }
        ?>
    </body>
</html>
