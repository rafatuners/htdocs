<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
       $registros = array(
        array('Título' => 'Título notícia 1', 'Conteúdo' => 'Conteúdo notícia 1'),
        array('Título' => 'Título notícia 2', 'Conteúdo' => 'Conteúdo notícia 2'), 
        array('Título' => 'Título notícia 3', 'Conteúdo' => 'Conteúdo notícia 3'),
        array('Título' => 'Título notícia 4', 'Conteúdo' => 'Conteúdo notícia 4'));

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br/> <br/> <br/>';

       //while
       
       //$idx = 0;
       echo 'O array possui: ' . count($registros) . ' registros';
       echo '<br/>';
       /*
       while($idx < count($registros)) {
          
          echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
          echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
          echo '<hr/>';  
          $idx++;

       }
       */

       // Do while
       /*
       do {
            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
            echo '<hr/>';  
            $idx++;
       } while($idx < count($registros))
       */

       //FOR    
       for($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
        echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
        echo '<hr/>';  
        
       }

    ?>
</body>
</html>