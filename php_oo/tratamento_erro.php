<?php

    try {
        echo '<h3> *** Try *** </h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql); //erro

        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponível as '. date('d/m/y H:i:s') .  ' mas não estava. Vamos seguir mesmo assim');
        }

    } catch (Error $e) {    
        echo '<h3> *** Catch error *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';  
        //armazenando esse erro em banco de dados
    } catch (Exception $e) {
        echo '<h3> *** Catch exception *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';  
        //armazenando esse erro em banco de dados
    }

    


?>