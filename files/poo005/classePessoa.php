<?php
    class Pessoa{

        private $pessoa;
        private $idade;
        private $sexo;

        public function __construct($nome, $idade, $sexo){
            if($nome && $idade && $sexo){
                $this->setPessoa($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
            } else{
                echo "<p>Preencha 'Nome', 'Idade' e 'Sexo'</p>";
            }
        }
        public function fazerAniversario(){
            $this->idade += 1;
        }
        
        public function getPessoa(){
            return $this->pessoa;
        }
        public function setPessoa($nomePessoa){
            $this->pessoa = $nomePessoa;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idadePessoa){
            $this->idade = $idadePessoa;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexoPessoa){
            $this->sexo = $sexoPessoa;
        }
    }

?>