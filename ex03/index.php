<?php

    $teste = "Hello World";
    $teste2 = [5, 6, 7, 8];

    function imprimir($x){
        $output = "";
        foreach($x as $i => $value ){
            $output .= "Elemento  $i : $value <br>";
        }
        return $output;
    };

    $imprimir = imprimir($teste2);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>

<body>
    <?php
        echo "<h1> $teste </h1> \n" ;
        echo "<p> $imprimir </p> \n" ;
    ?>
</body>


</html>