<?php
require_once "Localizzazione.php";
require_once "Consegna.php";
require_once "Prodotto.php";
require_once "DateFattorino.php";

  class Fattorino extends Consegna{
    use DateFattorino;
    use Prodotto;
    use Localizzazione;
    public $cod_fattorino;
    public $n_consegne;
    public $t_mezzo;
    // private $date_time;

    function __construct($n, $c, $m){

      $this->cod_fattorino = $n;
      $this->n_consegne = $c;
      $this->t_mezzo = $m;
    }
  }

?>
