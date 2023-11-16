<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
        //Sequenciais (numéricos)
        //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
        /*
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

        $lista_frutas[] = 'Abacaxi';

        
        var_dump($lista_frutas);
        echo '<hr/>';
        print_r($lista_frutas);
        

        echo $lista_frutas[4];
        */

        //associativos
        $lista_frutas = array(
            'a' => 'Banana',
            'b' => 'Maçã',
            'x' => 'Morango',
            'y' => 'Uva',
            '2' => 'Abacate');

        var_dump($lista_frutas);
        echo '<br/>';
        echo $lista_frutas['x'];

        $lista_frutas['w'] = 'Abacaxi';

        echo '<br/>';
        var_dump($lista_frutas);
    ?>
</body>
</html>