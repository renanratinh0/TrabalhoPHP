<?php
session_start(); // Iniciar a sessão
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos - Eventos de Games</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .header {
            background-color: #444;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        .eventos {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .event {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 30%;
            margin-bottom: 20px;
            text-align: center;
            cursor: pointer;
        }
        .event h2 {
            margin-top: 0;
        }
        .event p {
            color: #555;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Entrar</a>
        <a href="contato.php">Contato</a>
        <a href="pedidos.php">Pedidos</a>
        <a href="sobre.php">Sobre</a>
    </div>

    <div class="header">
        <h1>Venda de Ingressos para os maiores Eventos</h1>
    
    </div>

    <div class="container">
    <p align="center">Escolha um dos eventos abaixo para saber mais!</p>
        <div class="eventos">
            <?php
                // Informações dos eventos
                $eventos = array(
                    array(
                        "nome" => "Unilelo Paraverso",
                        "descricao" => "A maior feira de games do Universo",
                        "disponivel" => true,
                        "link" => "evento1.php"
                    ),
                    array(
                        "nome" => "EVENTO Secreto",
                        "descricao" => "2 R$ ou um Evento misterioso?",
                        "disponivel" => false,
                        "link" => "#" // Sem link, pois está indisponível
                    ),
                    array(
                        "nome" => "Festival do SAO",
                        "descricao" => "Os melhores espadashins do mundo estarão aqui.",
                        "disponivel" => true,
                        "link" => "evento2.php"
                    )
                );

                // Exibir os eventos lado a lado
                foreach ($eventos as $evento) {
                    echo "<div class='event' onclick=\"handleEventClick('" . $evento['link'] . "', " . ($evento['disponivel'] ? 'true' : 'false') . ")\">";
                    echo "<h2>" . $evento['nome'] . "</h2>";
                    echo "<p>" . $evento['descricao'] . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <script>
        function handleEventClick(link, disponivel) {
            if (disponivel) {
                window.location.href = link; // Redireciona para a página do evento
            } else {
                alert("Erro: Este evento está indisponível."); // Mensagem de erro
            }
        }
    </script>
</body>
</html>
