<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>

    <body>
        
        <?php

            $nome = 'Maria';
            $cor = 'Amarelo';
            $idade = 25;
            $atividade_preferida = 'Andar de bicicleta';

            //operador .

            echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida .'';

            //aspas duplas

            echo '<br />';

            echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";




        ?>

    </body>
</html>