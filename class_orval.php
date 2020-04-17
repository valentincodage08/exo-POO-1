<?php

require_once('class_paixdieu.php');

class Orval extends Biere {

    private $_conservation;
    private $_fermentation;
    private $_conseilBoire;


    public function __construct ($nomBiere, $categorie, $temperatureIdeale, $conservation, $fermentation, $conseilBoire) {
        parent::__construct($nomBiere, $categorie, $temperatureIdeale);
        $this->_conservation = $conservation;
        $this->_fermentation = $fermentation;
        $this->_conseilBoire = $conseilBoire;
    }

    public function affiche() {
      echo ("Chef, apporte-moi un ".$this->_nomBiere."!<br><br> Tu connais pas ? Bah c'est : <br>");
      echo ("- Une bière ".$this->_categorie."<br>");
      echo ("- Qui se boit idéalement à ".$this->_temperatureIdeale."°<br>");
      echo ("- On la conserve comme ceci, ".$this->_conservation."<br>");
      echo ("- Pour la fermentation : ".$this->_fermentation."<br>");
      echo ("- Mais tu sais, pour le boire : ".$this->_conseilBoire."<br><br><br>");
    }

    public function getconservation(){
      return $this->_conservation;
    }

    public function getfermentation() {
      return $this->_fermentation;
    }

    public function getconseilBoire() {
        return $this->_conseilBoire;
      }
}
?>