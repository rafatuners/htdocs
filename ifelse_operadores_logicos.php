<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>

    <body>
        
        <?php

            // Operadores condicionais / comparação
            // ==
            // ===
            // != ou <>
            // !==
            // <
            // >
            // <=
            // >=

            // Operadores lógicos
            // E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
            // OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões forem verdadeiros.
            // XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa.
            //! -> inverte o resultado retornado pela expressão

            //() estabelecer precedência

            if((22 == 22 && 3 == 3) || 5 != 5) {
                echo 'Verdadeiro';
            } else {
                echo 'Falso';
            }

            

        ?>

    </body>
</html>