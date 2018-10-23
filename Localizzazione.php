<?php

 trait Localizzazione{
   private $lat;
   private $lng;

   // public function getLocalizzazione($lat, $lng){
   //   $nowPositionLat =
   //   return *distanza*
   // }

   public function setLocalizzazione($lati,$lngt){
     $this->lat = $lati;
     $this->lng = $lngt;
   }
 }

?>
