<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empate;

    public function __construct(
        $nomeLutador,
        $nacionalidadeLutador,
        $idadeLutador,
        $alturaLutador,
        $pesoLutador,
        $vitoriaLutador,
        $derrotaLutador,
        $empateLutador
    )
    
    {
        $this->setNome          ($nomeLutador);
        $this->setNacionalidade ($nacionalidadeLutador);
        $this->setIdade         ($idadeLutador);
        $this->setAltura        ($alturaLutador);
        $this->setPeso          ($pesoLutador);
        $this->setVitoria       ($vitoriaLutador);
        $this->setDerrota       ($derrotaLutador);
        $this->setEmpate        ($empateLutador);

        $this->setCategoria($this->getPeso());
    }

    public function apresentar(){
        echo "<p>O lutador ".$this->getNome()." vem de origem ".$this->getNacionalidade()." e tem idade de ".$this->getIdade()." </p>";
        echo "<p>Possui a altura de ".$this->getAltura()." e peso de ".$this->getPeso()." </p>";
        echo "<p>Vitórias: ".$this->getVitoria()." </p>";
        echo "<p>Derrotas: ".$this->getDerrota()." </p>";
        echo "<p>Empates: ".$this->getEmpate()." </p>";
    }
    public function status(){
        echo "<p>".$this->getNome()." é da categoria ".$this->getCategoria()." </p>";
        echo "<p>Vitórias: ".$this->getVitoria()." </p>";
        echo "<p>Derrotas: ".$this->getDerrota()." </p>";
        echo "<p>Empates: ".$this->getEmpate()." </p>";
    }
    public function ganharLuta(){
        $this->setVitoria($this->getVitoria() + 1);
    }
    public function perderLuta(){
        $this->setDerrota($this->getDerrota() + 1);
    }
    public function empatatarLuta(){
        $this->setEmpate($this->getEmpate() + 1);
    }

    //FUNÇÕES GET E SET
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nomeLutador){
        $this->nome = $nomeLutador;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idadeLutador){
        $this->idade = $idadeLutador;
    }

    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($alturaLutador){
        $this->altura = $alturaLutador;
    }

    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($pesoLutador){
        $this->peso = $pesoLutador;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria($categoriaLutador){
        if($categoriaLutador < 52.2){
            $this->categoria = "Inválido";
        } else if ($categoriaLutador <= 70){
            $this->categoria = "Leve";
        } else if ($categoriaLutador <= 83.9){
            $this->categoria = "Médio";
        } else if ($categoriaLutador <= 120){
            $this->categoria = "Pesádo";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitoria(){
        return $this->vitoria;
    }
    public function setVitoria($vitoriaLutador){
        $this->vitoria = $vitoriaLutador;
    }

    public function getDerrota(){
        return $this->derrota;
    }
    public function setDerrota($derrotaLutador){
        $this->derrota = $derrotaLutador;
    }

    public function getEmpate(){
        return $this->empate;
    }
    public function setEmpate($empateLutador){
        $this->empate = $empateLutador;
    }
}
?>