<?php
class Time {
    private $nome;
    private $nacionalidade;
    private $vitorias;
    private $derrotas;
    private $empates;
    
     function apresentar() {
        echo "<p>--------------------</p> ";
        echo "Chegou a hora! O Clube " . $this->getNome();
        echo " Veio diretamente da  " . $this->getNacionalidade();
        echo " <br/>Tem " . $this->getvitorias() . " vitorias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p> ";
}
    function ganharjogo() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderjogo() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarjogo() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    function __construct($no,$na,$vi,$de,$em) {
       $this->nome = $no ;
       $this->nacionalidade = $na;
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