<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $idade = 10;
        $peso = 76.3;

        if($idade >= 16 && $idade <= 69 && $peso >= 50){
            $resultado = 'atende aos requisitos';
        } else {
            $resultado = 'não atende aos requisitos';
        }
    ?>

    <h1>Doação de sangue</h1>
    <p>
        Você tem <?= $idade ?> anos e pesa <?= $peso ?> kg. Portando você <?= $resultado ?>
    </p>
</body>
</html>