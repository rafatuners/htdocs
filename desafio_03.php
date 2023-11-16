<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $numeros = [];

        for($n = 0; $n < 6; $n++) {
            $numeros[$n] = rand(1,60);
            $valor = $numeros[$n];

            if(in_array($valor, $numeros)) {
                $numeros[$n] = rand(1,60);
            }
                         
        }

        echo '<pre>';
        print_r($numeros);
        echo '</pre>';


    ?>
</body>
</html>