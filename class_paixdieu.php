<?php

require_once('class_leffe.php');

class Paixdieu extends Biere {

    private $_frequenceBrassage;
    private $_enPlusDeCa;


    public function __construct ($nomBiere, $categorie, $temperatureIdeale, $frequenceBrassage, $enPlusDeCa) {
        parent::__construct($nomBiere, $categorie, $temperatureIdeale);
        $this->_frequenceBrassage = $frequenceBrassage;
        $this->_enPlusDeCa = $enPlusDeCa;
    }

    public function affiche() {
      echo ("Chef, apporte-moi une ".$this->_nomBiere."!<br><br> Tu connais pas ? Bah c'est : <br>");
      echo ("- Une bière ".$this->_categorie."<br>");
      echo ("- Qui se boit idéalement à ".$this->_temperatureIdeale."°<br>");
      echo ("- Ce qui la démarque c'est qu'elle est brassée : ".$this->_frequenceBrassage."<br>");
      echo ("- Et en plus de ça, ".$this->_enPlusDeCa."<br><br><br>");
    }

    public function getfrequenceBrassage(){
      return $this->_frequenceBrassage;
    }

    public function getenPlusDeCa() {
      return $this->_enPlusDeCa;
    }
}
?>