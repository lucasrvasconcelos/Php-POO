<?php
class Banco{
    private $numeroConta;
    private $tipo;
    private $saldo;
    private $status;   

    public function __construct(){
        $this->status = 0;

    }
    public function abrirConta(){

        $this->setNumConta(123456789);

        if(!$this->getStatus()){
            $this->setStatus(1);
            if($this->getTipoConta()){
                echo "<p>Conta ".$this->getTipoConta()." selecionada</p>";
                if($this->getTipoConta() == 'cc'){
                    $this->setSaldo(50);
                    echo "<p>Seu saldo atual é de R$".$this->getSaldo()."</p>";
                    echo "<p>Conta aberta com sucesso</p>";
                } else{
                    $this->setSaldo(150);
                    echo "<p>Seu saldo atual é de R$".$this->getSaldo()."</p>";
                    echo "<p>Conta aberta com sucesso</p>";
                }
            } else{
                echo "<p>Informe o tipo da conta</p>";
            }
        }
    }
    public function fecharConta(){

    }
    public function depositar($d){
        if($this->status){
            $this->setSaldo($d);
            echo "<p>Depósito de: R$".$d." Feito com sucesso. Saldo atual R$".$this->getSaldo()."</p>";
        }
    }
    public function sacar($s){
        if($this->status && $s <= $this->getSaldo()){
            $this->setSaldo(-$s);
            echo "<p>Saque de: R$".$s." Feito com sucesso. Saldo atual R$".$this->getSaldo()."</p>";
        } else{
            echo "<p>Impossível sacar</p>";
            echo "<p>Valor solicitado: ".$s."R$ valor disponível ".$this->getSaldo()."</p>";
        }
    }
    public function pagarConta(){

    }

    //METODOS GET E SET

    public function getNumConta(){
        return $this->numeroConta;
    }

    public function setNumConta($NewNumConta){
        $this->numeroConta = $NewNumConta;
    }

    public function getTipoConta(){
        return $this->tipo;
    }

    public function setTipoConta($NewTipoConta){
        $this->tipo = $NewTipoConta;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($NewSaldo){
        $this->saldo += $NewSaldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($newStatus){
        $this->status = $newStatus;
    }
}


?>