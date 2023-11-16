<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar(); 
    }

    //--------------------------------

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    
    class Tv implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar canal';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'Desligar';
        }
    }

    
    $x = new Geladeira();
    $y = new Tv();

    //-----------------------------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquativoInterface {
        public function nadar();
    }

    //--------------------------------------------

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'Andar';
        }

        public function respirar() {
            echo 'respirar';            
        }

        public function conversar() {
            echo 'Conversar';
        }
    }

    class Baleia implements MamiferoInterface, AquativoInterface {
        public function respirar() {
            echo 'respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }

        protected function esguichar() {
            echo 'Esguichar';
        }
    }

    //--------------------------------------------------------------
    //--------------------------------------------------------------

    interface AnimalInterface {
        public function comer();
    }

    interface Aveinterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voar';
        }

        public function comer() {
            echo 'Comer';
        }
    }
    




?>