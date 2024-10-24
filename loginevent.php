<?php       
    session_start();
    $usuario = $_POST["usu"];
    $senha = $_POST["sen"];
    
    if ($usuario === $_SESSION["user"] && $senha === $_SESSION["senha"]) {
        $_SESSION["login"] = "s";
        $_SESSION["parahome"] = $usuario;
        $_SESSION["erro"] = "";
        header("Location: testaux.php");
    } else {
        $_SESSION["erro"] = "Usuário ou senha incorretos!";
        header("Location: entrar.php");
    }
?>

