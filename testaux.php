<?php
    session_start();
?>
<html>
    <head> 
        <title>Home de test</title>
    </head>

    <body>
        <font size="5"><a href="testaux.php">Home</a></font>
        <font size="5"><a href="">Contato</a></font>
        <font size="5"><a href="">Pedido</a></font>
        <font size="5"><a href="">Sobre</a></font>
        <font size="5"><a href="cadastro.php">Cadastrar</a></font>
        <font size="5"><a href="entrar.php">Entrar</a></font>
        <hr></br>

        <?php
            if (isset($_SESSION["erro"]) && $_SESSION["erro"] === "") {
                echo $_SESSION["parahome"] ." está logado";
            }
        ?>

        <div>Home imaginário</div>
    </body>
</html>
