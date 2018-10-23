<?php
require_once 'Societa.php';
require_once 'Fattorino.php';
// nuova società
$soc = new Societa();

$soc->name = 'bellboys';
$soc->città = 'Roma';
$soc->contatti = 'bellboys@email.com';

// stampo a schermo i dati della società
$soc->getDateSocieta();

//inserisco un nuovo fattorino
$fatt = new Fattorino(001, rand(0, 50), 'auto');
// inserisco un prodotto ad un fattorino
$fatt->name_prodotto = 'Libro';
$fatt->peso_prodotto = 3;
$fatt->codice_prodotto = rand(100,999);
$fatt->nome = 'Mario';
$fatt->cognome = 'Rossi';
$fatt->n_telefono = 3332374563;
$fatt->data_di_nascita = 1990-02-30;
$fatt->email = 'mariorossi@gmail.com';
$fatt->setLocalizzazione(43.5, 56.8);

$fatt->setData_limite(new \DateTime('2020-01-01'));

try{
  $fatt->consegne($fatt);
}
catch(ConsegnaInRitardoException $e){
  echo " <br> Fattorino : cosegna troppo tardi <br>";
}



// inserisco un nuovo fattorino
$fatt1 = new Fattorino(002, rand(0,20), 'bicicletta');
// $fatt1->setData_limite(new \DateTime('2010-01-01'));
$fatt1->setLocalizzazione(98.9, 45.6);
//set data limite per la consegna
// try{
//   $fatt1->consegne($fatt1);
// }
// catch(ConsegnaInRitardoException $e){
//   echo " <br> Fattorino : cosegna troppo tardi <br>";
// }

// var_dump($fatt);



?>
