<?php
    session_start();
	error_reporting(0);
?>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        <font size="5"><a href="testaux">Home</a></font>
        <font size="5"><a href="cadastro.php">Cadastrar</a></font>
        <font size="5"><a href="entrar.php">Entrar</a></font>
        <hr></br>

        <?php
            if (isset($_SESSION["user"])) {
                header("Location: saudacao.php");
            }
        ?>

        <center>
        <fieldset>
        <form action="cadastro.php" method="POST">
            Nome:<input type="text" name="usuario" required></br>
            Senha:<input type="password" name="senha" required></br>
            Cpf:<input type="number" name="cpf" min="0" max="99999999999" required></br>
            Data de Nascimento:<input type="number" name="dia" min="0" max="31" required>/
            <input type="number" name="mes" min="0" max="12" required>/
            <input type="number" name="ano" min="1900" max="2100" required></br>
            Email:<input type="email" name="email" required></br>
            
            <!-- Cor da pele -->
            Cor da Pele:
            <select name="cor_pele" required>
                <option value="">Selecione</option>
                <option value="branca">Branca</option>
                <option value="negra">Negra</option>
                <option value="parda">Parda</option>
                <option value="amarela">Amarela</option>
                <option value="indigena">Indígena</option>
            </select></br>

            <!-- Estado Civil -->
            Estado Civil:
            <select name="estado_civil" required>
                <option value="">Selecione</option>
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
                <option value="viuvo">Viúvo</option>
            </select></br>

            <!-- Estado onde mora -->
            Estado:
            <select name="estado" required>
                <option value="">Selecione um estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select></br>
            
            Gênero:
            <input type="radio" name="genero" value="masculino" required>Masculino
            <input type="radio" name="genero" value="feminino">Feminino</br>

            <input type="submit" name="botao1" value="Enviar">
            <input type="reset" name="botao2" value="Limpar">
        </form>
        </fieldset>
        </center>

        <?php
            $_SESSION["user"] = $_POST["usuario"];
            $_SESSION["senha"] = $_POST["senha"];
            if ($_SESSION["user"] && $_SESSION["senha"]) {
                header("Location: saudacao.php");
            }
        ?>
    </body>
</html>
