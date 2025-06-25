<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos separados</title>
    <style>
        a {
            margin: 20px;
            font-size: larger;
        }
    </style>
</head>
<body align="center">
    <a href="?pagina=home">Home</a> | <a href="?pagina=sobre">Sobre</a> | <a href="?pagina=contato">Contato</a>

    <?php
        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        } else{
            $pagina = 'home';
        }

        if($pagina == 'home'){
            echo "<h1>Página incial</h1>";
        } elseif($pagina == 'sobre'){
            echo "<h1>Sobre Nós</h1>"; 
        } elseif($pagina == 'contato'){
            echo "<h1>Página De Contato</h1>";
        }
    ?>
</body>
</html>