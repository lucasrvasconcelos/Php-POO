<?php
    interface Publicao{
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avancarpag();
        public function voltarPag();
    }
    class Livro implements Publicao{

        private $livro;
        private $autor;
        private $totpaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($livro, $autor, $totpaginas, $leitor){
            $this->livro = $livro;
            $this->autor = $autor;
            $this->totpaginas = $totpaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        private function getlivro(){
            return $this->livro;
        }
        private function setlivro($nomelivro){
            $this->livro = $nomelivro;
        }

        private function getAutor(){
            return $this->autor;
        }
        private function setAutor($autor){
            $this->autor = $autor;
        }

        private function getTotpaginas(){
            return $this->totpaginas;
        }
        private function setTotpaginas($totalpaginas){
            $this->totpaginas = $totalpaginas;
        }

        private function getPaginaAtual(){
            return $this->pagAtual;
        }
        private function setPaginaAtual($pagina){
            $this->pagAtual = $pagina;
        }

        private function getAberto(){
            return $this->aberto;
        }
        private function setAberto($aberto){
            $this->aberto = $aberto;
        }


        private function getLeitor(){
            return $this->leitor;
        }
        private function setLeitor($leitor){
            $this->leitor = $leitor;
        }

        // INTERFACE -----------------------------------
        public function abrir() {
            if(!$this->aberto){
                $this->setAberto(true);
            } else {
                echo "<p>livro já aberto</p>";
            }
        }
        
        public function fechar() {
            if($this->aberto){
                $this->setAberto(false);
            } else {
                echo "<p>Livro já fechado</p>";
            }
        }
        
        public function folhear($p) {
            if($this->getAberto()){
                if($p <= $this->getTotpaginas() && $p > 0){
                    $this->pagAtual = $p;
                } else {
                    echo "<p>Página inexistente!</p>";
                }
            } else{
                echo "<p>Abra primeiramente o livro para folhear!</p>";
            }
            
        }
        
        public function avancarpag() {
            if($this->getAberto()){
                if($this->getPaginaAtual() < $this->getTotpaginas()){
                    $this->setPaginaAtual($this->getPaginaAtual() + 1);
                } else {
                    echo "<p>Página inexistente!</p>";
                }
            } else{
                echo "<p>Abra primeiramente o livro para folhear!</p>";
            }
        }
        
        public function voltarPag() {
            if($this->getAberto()){
                if($this->getPaginaAtual() > 0){
                    $this->setPaginaAtual($this->getPaginaAtual() - 1);
                } else {
                    echo "<p>Página inexistente!</p>";
                }
            } else{
                echo "<p>Abra primeiramente o livro para folhear!</p>";
            }
        }
}

?>