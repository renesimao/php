<?php
class Lutador {
    private  $nome;
    private  $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
     function apresentar() {
        echo "<p>--------------------</p> ";
        echo "Chegou a hora! O lutador " . $this->getNome();
        echo " Veio diretamente da  " . $this->getNacionalidade();
        echo " <p>Tem " . $this->getIdade() . " Anos e pesa " . $this->getPeso() . " Kg ";
        echo " <br/>Tem " . $this->getvitorias() . " vitorias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p> ";
    }
     function status() {
        echo "<p>-------------------</p> ";
        echo $this->getNome() . " e um " . $this->getCategoria();
        echo " venceu " . $this->getvitorias() . " vezes ";
        echo " perdeu " . $this->getDerrotas() . " vezes ";
        echo " empatou " . $this->getEmpates() . " vezes ";
    }
     function ganharluta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderluta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarluta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;   
    }
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if($this->peso < 52.2) {
            $this->categoria = "invalido";
        } elseif($this->peso <= 70.3) {
            $this->categoria = "leve";
        } elseif($this->peso <= 83.9) {
            $this->categoria = "medio";
        } elseif($this->peso <= 120.2) {
            $this->categoria = "pesado";
        } else {
            $this->categoria = "invalido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }


}
