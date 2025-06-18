<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>
</head>
<body  align="center">
    <?php
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if($usuario == 'admin' && $senha == '1234'){
            echo "<h1>Bem-Vindo, $usuario!</h1>";
        } else{
            echo "<h1>Error =/</h1>";
            echo "<br>";
            echo "<h3>Usuário ou senha incorretos!</h3>";
        }
    ?>
</body>
</html>