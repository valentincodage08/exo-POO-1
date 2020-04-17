<?php

require_once('class_biere.php');

class Leffe extends Biere {

    private $_brasseeA;
    private $_commentLaConsommer;


    public function __construct ($nomBiere, $categorie, $temperatureIdeale, $brasseeA, $commentLaConsommer) {
        parent::__construct($nomBiere, $categorie, $temperatureIdeale);
        $this->_brasseeA = $brasseeA;
        $this->_commentLaConsommer = $commentLaConsommer;
    }

    public function affiche() {
      echo ("Chef, apporte-moi une ".$this->_nomBiere."!<br><br> Tu connais pas ? Bah c'est : <br>");
      echo ("- Une bière ".$this->_categorie."<br>");
      echo ("- Qui se boit idéalement à ".$this->_temperatureIdeale."°<br>");
      echo ("- Et puis elle est brassée à ".$this->_brasseeA."<br>");
      echo ("- Et je te donne même quelques infos pour bien l'apprécier : ".$this->_commentLaConsommer."<br><br><br>");
    }

    public function getbrasseeA(){
      return $this->_brasseeA;
    }

    public function getcommentLaConsommer() {
      return $this->_commentLaConsommer;
    }
}
?>
