<?php
require_once "ConsegnaInRitardoException.php";

  class Consegna{

    private $is_consegnato;
    private $ts_consegna;
    private $data_limite_consegna;

    public function setData_limite(DateTime $dt){
      $this->data_limite_consegna = $dt;
    }

    public function consegne(){
      $now = new \DateTime('now');

      if($now > $this->data_limite_consegna){
        // $this->is_consegnato = false.'Fuori tempo massimo';
        //inserire un eccezione
        throw new ConsegnaInRitardoException;

      }
      else{
        $this->is_consegnato = true;
        $this->ts_consegna = new \DateTime('now');
      }

    }
  }
?>
