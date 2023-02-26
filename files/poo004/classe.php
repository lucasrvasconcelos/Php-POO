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
        $this->setCategoria($pesoLutador);
    }

    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria($peso){
        if($peso < 52.2){
            $this->categoria = "Inválido";
        } else if ($peso <= 70){
            $this->categoria = "Leve";
        } else if ($peso <= 83.9){
            $this->categoria = "Médio";
        } else if ($peso <= 120){
            $this->categoria = "Pesado";
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

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds = 3;
    private $aprovada;

    public function __construct($desafiado, $desafiante){
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;

        
    }

    public function marcarLuta(){
        if($this->desafiado != $this->desafiante){
            echo "<p>Lutadores selecionados " .$this->desafiado->getNome(). " vs " .$this->desafiante->getNome(). "</p>";
            if($this->desafiado->getCategoria() == $this->desafiante->getCategoria()){
                echo "<p>Luta APROVADA</p>";
                $this->aprovada = true;
                for ($i=0; $i <= $this->getRounds(); $i++) { 
                    $this->lutar();
                } 
                $this->desafiado->status();
                $this->desafiante->status();
               } else {
                echo "<p>Lutadores são de diferente categorias</p>";
                echo "<p>Luta REPROVADA</p>";
                $this->aprovada = false;
               }
        } else {
            echo "<p> Mesmo lutador selecionado duas vezes </p>";
        }
       
    }

    public function lutar(){
        if($this->aprovada){
            $v = rand(0,2);
            switch ($v) {
                case '0':
                    echo "<p>Empate</p>";
                    $this->desafiado->empatatarLuta();
                    $this->desafiante->empatatarLuta();
                    break;
                case '1':
                    echo "<p>".$this->desafiado->getNome()." VENCEU </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case '2':
                    echo "<p>".$this->desafiante->getNome()." VENCEU</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                default:
                    break;
            }
        } else{
            return;
        }
    }

    public function getRounds(){
        return $this->rounds;
    }
    
}
?>