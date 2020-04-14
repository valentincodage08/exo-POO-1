<?php 

class Joue {

    // Je déclare mes variables
    private $_nomDuPersonnage;
    private $_categorieDePersonnage;
    private $_pointsDeVie;
    private $_pointsDeDegats;

    // J'initialise ma classe
    public function __construct( $nomDuPersonnage, $categorieDePersonnage, $pointsDeVie, $pointsDeDegats) {
        echo "Mon constructeur s'est bien créé<br>";
        $this->_nomDuPersonnage =  $nomDuPersonnage;
        $this->_categorieDePersonnage = $categorieDePersonnage;
        $this->_pointsDeVie = $pointsDeVie;
        $this->_pointsDeDegats = $pointsDeDegats;
    }

    // GETTERS
    public function getNomDuPersonnage() {
        return $this->_nomDuPersonnage;
    }

    public function getCategorieDePersonnage() {
        return $this->_categorieDePersonnage;
    }

    public function getPointsDeVie() {
        return $this->_pointsDeVie;
    }

    public function getPointsDeDegats() {
        return $this->_pointsDeDegats;
    }

    //SETTERS
    public function setNomDuPersonnage($nomDuPersonnage) {
        if(is_string($nomDuPersonnage)){
            $this->_nomDuPersonnage = $nomDuPersonnage;
        }
    }

    public function setCategorieDePersonnage($categorieDePersonnage) {
        if(is_string($categorieDePersonnage)){
            $this->_categorieDePersonnage = $categorieDePersonnage;
        }
    }

    public function setPointsDeVie($pointsDeVie) {
        if(is_int($pointsDeVie)){
            $this->_pointsDeVie = $pointsDeVie;
        }
    }

    public function setPointsDeDegats($pointsDeDegats) {
        if(is_int($pointsDeDegats)){
            $this->_pointsDeDegats = $pointsDeDegats;
        }
    }

    public function infos() {
        echo "Votre personnage s'appelle '$this->_nomDuPersonnage'<br>";
        echo "Votre personnage est un '$this->_categorieDePersonnage'<br>";
        echo "Votre personnage a '$this->_pointsDeVie' points de vie<br>";
        echo "Votre personnage inflige '$this->_pointsDeDegats' points de dégats<br>";
    }




}

?>