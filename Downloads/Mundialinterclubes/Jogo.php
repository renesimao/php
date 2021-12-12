<?php
require_once 'Time.php';
class Jogo {
  private $visitante;
  private $casa;
  private $aprovada;
  
 public function marcarjogo($t1,$t2) {
     if($t1 <> $t2) {
         $this->aprovada = true;
         $this->casa = $t1;
         $this->visitante = $t2;
     } else {
         $this->aprovada = false;
         $this->casa = null;
         $this->visitante = null;
     }
 }
 public function jogar() {
     if($this->aprovada) {
         $this->casa->apresentar();
         $this->visitante->apresentar();
         $vencedor = rand(0,2);
         switch ($vencedor) {
             case 0 :
                 echo "<p>Empatou!</p>";
                 $this->casa->empatarjogo();
                 $this->visitante->empatarjogo();
                 break;
             case 1:
                 echo "<p>".$this->visitante->getNome()." Venceu </p>";
                  $this->casa->perderjogo();
                 $this->visitante->ganharjogo();
                 break;
             case 2:
                 echo "<p>".$this->casa->getNome()." Venceu  </p>";
                 $this->casa->ganharjogo();
                 $this->visitante->perderjogo();
                 break;
         } } else {
             echo " <p> Esse jogo não pode acontecer </p> ";
         }
    
 }
 function getVisitante() {
     return $this->visitante;
 }

 function getCasa() {
     return $this->casa;
 }

 function getAprovada() {
     return $this->aprovada;
 }

 function setVisitante($visitante) {
     $this->visitante = $visitante;
 }

 function setCasa($casa) {
     $this->casa = $casa;
 }

 function setAprovada($aprovada) {
     $this->aprovada = $aprovada;
 }

}
