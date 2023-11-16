<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $num = 4.4;

        //Arredonda para cima
        echo ceil($num);
        echo '<br/>';

        //Arredonda para baixo
        echo floor($num);
        echo '<br/>';

        //arredonda na base da fração
        echo round($num);
        echo '<br/>';

        //Gera um valor aleatório dde 0 até randmax
        echo rand(10,20);
        echo '<br/>' . getrandmax();
        echo '<br/>';

        //Retorna a raiz quadrada de um número
        echo sqrt($num);
        echo '<br/>';

    ?>
</body>
</html>