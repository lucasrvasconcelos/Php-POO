<?php
class Caneta{
    public $cor = 'azul';
    public $tampada = true;    

    public function tampar(){
        if($this->getTampada()){
            return false;
        }else{
            return true;
        }
    } 

    public function destampar(){
        if($this->getTampada()){
            return true;
        }else{
            return false;
        }
    } 

    public function setTampada(){
        $this->tampada = true;
    }

    public function setDestampada(){
        $this->tampada = false;
    }

    public function getTampada(){
        return $this->tampada;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cornova){
        $this->cor = $cornova;
    }
}

?>