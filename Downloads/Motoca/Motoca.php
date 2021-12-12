<?php
class Motoca {
   private $modelo;
   private $marca;
   private $cor;
   
   function __construct($modelo,$marca,$cor) {
       $this->modelo = $modelo;
       $this->marca = $marca;
       $this->cor = $cor;
   }
   function getModelo() {
       return $this->modelo;
   }
   function setModelo() {
       $this->modelo = $modelo;
   }
   function getMarca() {
       return $this->marca;
   }
   function setMarca() {
       $this->marca = $marca;
   }
   function getcor() {
       return $this->cor;
   }
   function setCor() {
       $this->cor = $cor;
   }
}
