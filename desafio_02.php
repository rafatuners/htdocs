<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcularImpostoRenda($salario){
            if($salario <= 1903.98) {
                $imposto = 'Isento';
            } else if ($salario > 1903.99 || $salario <= 2826.65) {
                $imposto = ($salario * 7.5)/100;
            } else if ($salario > 2826.65 || $salario <= 3751.05) {
                $imposto = ($salario * 15)/100;
            } else if ($salario > 3751.05 || $salario <= 4664.68) {
                $imposto = ($salario * 22.5)/100;
            } else {
                $imposto = ($salario * 27.5)/100;
            }
            
            return $imposto;
        }

    echo calcularImpostoRenda(2500);
    ?>

</body>
</html>