<?php
    require_once("Pessoa.php");

    class Bolsista extends Aluno {
        private $bolsa;
        private $teste;
        public function renovarBolsa(){

        }

        public function pagarMensalidade(){
            
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }

?>