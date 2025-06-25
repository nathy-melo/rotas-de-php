<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body  align="center">
    <form action="questao_4.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required>
        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>

        <button type="submit" id="enviar">Enviar</button>

    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            echo "<h1>Olá, $nome!</h1>";
        }

    ?>
</body>
</html>