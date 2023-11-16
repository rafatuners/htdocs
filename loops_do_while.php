<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $x = 1;
        
        do {
           echo "x = $x <br/>"; 

           $x++; //criterio de parada

           //continue
           //break
        } while($x < 9);

    ?>
</body>
</html>