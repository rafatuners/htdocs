<?php

    function sendEmail($destinatario = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: " . $destinatario. "<br>";
        echo "CC: " . $cc. "<br>";
        echo "Assunto: " . $assunto. "<br>";
        echo "Mensagem: " . $mensagem. "<br>";
    }

    sendEmail(
        assunto: "Argumentos Nomeados",
        destinatario: "rcruz4513@yahoo.com.br",
        mensagem: "Dominando a featrure de argumento nomeados do PHP 8",
        cc: "rafatuners@gmail.com"
    );    

    echo "<hr>";

    /* convensional -> respeitando a ordem dos parâmetros */

    sendEmail(
        "rcruz@yahoo.com.br",
        "rafatuners@gmail.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumento nomeados do PHP 8"
    );

    echo "<hr>";

    sendEmail(
        "rcruz@yahoo.com.br",        
        "Argumentos Nomeados",
        "Dominando a feature de argumento nomeados do PHP 8"
    );





?>