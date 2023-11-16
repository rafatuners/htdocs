<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
       /*
       //recuperação da data atual / data corrente
       echo date('d/m/Y H:i');
       echo '<br/>';

       //
       date_default_timezone_set('America/Sao_Paulo');
       echo date_default_timezone_get();
       echo '<br/>';
       echo date('d/m/Y H:i');
       */ 
       
       $data_inicial = '2017-05-15';
       $data_final = '2018-05-15';

       //timestamp
       //01/01/1970 -- 2018-04-24 

       $time_inicial = strtotime($data_inicial);
       $time_final = strtotime($data_final);
       echo $data_inicial . ' - ' . $time_inicial;
       echo '<br/>';
       echo $data_final . ' - ' . $time_final;

       $diferenca_times = $time_final - $time_inicial; 

       echo '<br/>';

       echo 'A diferença de segundos entre a data inicial e a data final é ' . $diferenca_times;  

       $segundos_existem_dia = 24 * 60 * 60;
       echo '<br/>';

       echo "Um dia possui $segundos_existem_dia segundos";

       $diferenca_dias_datas = $diferenca_times / $segundos_existem_dia;

       echo '<br/>';

       echo "A diferença em dias é de $diferenca_dias_datas";
    ?>
</body>
</html>