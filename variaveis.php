<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>

    <body>
        
        <?php

            //string
            $nome = 'Rafael Cruz';

            //int
            $idade = 29;

            //float
            $peso = 76.3;

            //boolean
            $fumante_sn = true; // (true = 1) ou (false = vazio) 

            // ... Lógica ... //

            $idade = 30;

        ?>

        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>

    </body>
</html>