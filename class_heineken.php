<?php

require_once('class_orval.php');

class Heineken extends Biere {

    private $_mourant;
    private $_caps;
    private $_deconseille;


    public function __construct ($nomBiere, $categorie, $temperatureIdeale, $mourant, $caps, $deconseille) {
        parent::__construct($nomBiere, $categorie, $temperatureIdeale);
        $this->_mourant = $mourant;
        $this->_caps = $caps;
        $this->_deconseille = $deconseille;
    }

    public function affiche() {
      echo ("Chef, apporte-moi un ".$this->_nomBiere."!<br><br> Tu connais pas ? Bah c'est : <br>");
      echo ("- Une bière ".$this->_categorie."<br>");
      echo ("- Qui se boit idéalement à ".$this->_temperatureIdeale."°<br>");
      echo ("- A ne boire que si ".$this->_mourant."<br>");
      echo ("- Cette bière est utile pour : ".$this->_caps."<br>");
      echo ("- A part ça, si on t'en demande une, répond ceci : ".$this->_deconseille.".<br><br><br>");
    }

    public function getmourant(){
      return $this->_mourant;
    }

    public function getcaps() {
      return $this->_caps;
    }

    public function getdeconseille() {
        return $this->_deconseille;
      }
}
?>