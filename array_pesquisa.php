<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        //in_array() -> true ou false para a existencia do que está sendo procurado.

        //array_search() -> Retorna o índice do valor pesquisado, caso exista. 

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        /*
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        //$existe = in_array('Morango', $lista_frutas);
        //true -> 1
        //false -> texto = vazio
        $existe = array_search('Uva', $lista_frutas);
        //null

        
        if ($existe != null){
            echo 'Sim o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }
        */

        $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('João', $lista_coisas['pessoas']);
    ?>
</body>
</html>