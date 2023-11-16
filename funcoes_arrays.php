<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
        //is_array
        /*
        $array = array();
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim é um array';
        } else {
            echo 'Não é um array';
        }
        */

        //array_keys
        /*
        $array = [1=> 'a', 7 => 'b', 18=> 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';  
        
        $chaves_array = array_keys($array);

        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        */

        //sort
        /*
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array); //true ou false

        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */

        //asort
        /*
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        asort($array); //true ou false

        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */

        //count
        /*
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>';
        */

        //array_merge
        /*
        $array1 = ['OSX', 'Windows'];
        $array2 = array('Linux');
        $array3 = ['Solaris'];

        $novo_array = array_merge($array1, $array2, $array3);

        echo '<pre>';
            print_r($novo_array);            
        echo '</pre>';
        */

        //explode
        /*
        $string = '26/04/2018';
        $array_retorno = explode('/', $string);

        echo '<pre>';
            echo $string;
            print_r($array_retorno); 
            echo '<hr/>'; 
            echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];          
        echo '</pre>';
        */

        //implode

        $array = ['a', 'b', 'x', 'y']; // a,b,x,y
        $string_retorno = implode(' ', $array);
        echo $string_retorno;





        




        
    ?>
</body>
</html>