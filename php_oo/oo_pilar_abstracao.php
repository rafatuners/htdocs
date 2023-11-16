<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters
        /*
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }
        */

        //getters e settes (overloading/sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //metodos
        function resumirCadFunc() {
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)';           
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;

        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('cargo', 'motorista');
    $y->__set('numFilhos', 2);
    $y->__set('salario', 2500);
    echo $y->resumirCadFunc();
    //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s), trabalha como ' . $y->__get('cargo') . ' e ganha R$' . $y->__get('salario') . ' reais por mês';
    
    echo '<br/>';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('cargo', 'faxineira');
    $x->__set('numFilhos', 0);
    $x->__set('salario', 1500);
    echo $x->resumirCadFunc();
    //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s), trabalha como ' . $x->__get('cargo') . ' e ganha R$' . $x->__get('salario') . ' reais por mês';
    


?>