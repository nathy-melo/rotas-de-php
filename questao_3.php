<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body  align="center">
    <form action="questao_3.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>

        <button type="submit" id="enviar">Cadastrar</button>

    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            header("Location: questao_3.html");
        }
    ?>
</body>
</html>