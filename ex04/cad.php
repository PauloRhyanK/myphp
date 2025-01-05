<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>

</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            // var_dump($_GET);

            $n = $_GET["Nome"] ?? "Desconhecido";
            $s = $_GET["Sobrenome"] ?? "Sem Familia" ;
            
            echo "Bem vindo <strong>$n $s</strong>!"
            
        ?>
    </main>

</body>

</html>