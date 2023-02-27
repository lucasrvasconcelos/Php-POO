<?php
    require_once('controlador.php');
    class Controle implements ControladorInterface{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setVolume($Volume){
            $this->volume = $Volume;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($Tocando){
            $this->tocando = $Tocando;
        }

        //MÉTODOS ABSTRATOS
        
        public function ligar() {
            $this->setLigado(true);
        }
        
        public function desligar() {
            $this->setLigado(false);
        }
        
        public function abrirMenu() {
            echo "<p>Aberto o menu</p>";
            if($this->getLigado()){
                echo "<p>Aberto o menu</p>";
                for ($i=0; $i <= $this->getVolume(); $i++) { 
                    echo "[]";
                }
            } else{
                echo "<p>Não é possível abrir menu. 'Tv Desligada'</p>";
            }
        }
        
        public function fecharMenu() {
        }
        
        public function maisVolume() {
        }
        
        public function menosVolume() {
        }
    
        public function ligarMudo() {
        }
        
        public function deligarMudo() {
        }
        
        public function play() {
        }
        
        public function pause() {
        }
}
?>

<?php
$controle = new Controle;

echo $controle->abrirMenu();
?>
