<?php
require_once 'Lutador.php';
class Luta {
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;
   
   public function marcarluta($l1,$l2) {
       if($l1->getCategoria() === $l2->getcategoria() && ($l1 <> $l2)) {
           $this->aprovada = true;
           $this->desafiado = $l1;
           $this->desafiante = $l2;
       } else {
           $this->aprovada = false;
           $this->desafiado = null;
           $this->desafiante = null;
       }
        
   }
   public function lutar() {
       if ($this->aprovada) {
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();
           $vencedor = rand(0,2);
           switch ($vencedor) {
               case 0:
                   echo "<p>Empatou!</p>";
                   $this->desafiado->empatarluta();
                   $this->desafiante->empatarluta();
                   break;
               case 1:
                   echo"<p>".$this->desafiado->getNome()." Venceu </p>";
                   $this->desafiado->ganharluta();
                   $this->desafiante->perderluta();
                   break;
               case 2:
                   echo "<p>" . $this->desafiante->getNome()." Venceu </p>";
                   $this->desafiado->perderluta();
                   $this->desafiante->ganharluta();
                   break;
           }
       } else {
           echo "<p> Essa luta não pode acontecer!</p>";
       }
   }
   function getDesafiado() {
       return $this->desafiado;
   }

   function getDesafiante() {
       return $this->desafiante;
   }

   function getRounds() {
       return $this->rounds;
   }

   function getAprovada() {
       return $this->aprovada;
   }

   function setDesafiado($desafiado) {
       $this->desafiado = $desafiado;
   }

   function setDesafiante($desafiante) {
       $this->desafiante = $desafiante;
   }

   function setRounds($rounds) {
       $this->rounds = $rounds;
   }

   function setAprovada($aprovada) {
       $this->aprovada = $aprovada;
   }


}
