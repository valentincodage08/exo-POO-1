<?php

class Biere
{

  protected $_nomBiere;
  protected $_categorie;
  protected $_temperatureIdeale;

  public function __construct ($nomBiere, $categorie, $temperatureIdeale) {
      $this->_nomBiere = $nomBiere;
      $this->_categorie = $categorie;
      $this->_temperatureIdeale = $temperatureIdeale;
  }

  public function affiche() {
    echo ("Chef, apporte-moi une ".$this->_nomBiere."!<br><br> Tu connais pas ? Bah c'est : <br>");
    echo ("- Une bière ".$this->_categorie."<br>");
    echo ("- Qui se boit idéalement à ".$this->_temperatureIdeale."°<br><br><br>");
  }

  public function getnomBiere(){
    return $this->_nomBiere;
  }

  public function getcategorie(){
    return $this->_categorie;
  }

  public function gettemperatureIdeale(){
    return $this->_temperatureIdeale;
  }
}
?>