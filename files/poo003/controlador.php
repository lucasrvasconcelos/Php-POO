<?php
interface ControladorInterface{
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function deligarMudo();
    public function play();
    public function pause();
}
?>