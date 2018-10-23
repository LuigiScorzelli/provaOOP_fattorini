<?php
  require "Fattorino.php";

  class Societa {
    // dati anagrafici della società

    public $name;
    public $città;
    public $contatti;

    public function getDateSocieta(){
      echo ($this->name."-".$this->città."-".$this->contatti);
    }
  }
?>
