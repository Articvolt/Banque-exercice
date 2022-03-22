<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_date;
    private array $_comptes;        //création d'un tableau

    public function __construct( string $nom, string $prenom, string $date) {   
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = new DateTime($date);
        $this->_comptes = [];
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDate() {
        return $this->_date;
    }
    public function getAge() {
        return $this->getDate()->diff( new Datetime())->format("%y");   //calcul de l'âge en faisant la "diff" entre le DaTime du titulaire et la date actuelle
    }
    public function setNom(string $NewNom) {
        $this->_nom = $NewNom;
    }
    public function setPrenom(string $NewPrenom) {
        $this->_prenom = $NewPrenom;
    }
    public function setDate(DateTime $NewDate) {
        $this->_date = $NewDate;
    }

    public function ajouterComptes($NewCompte) {
        $this->_comptes[] = $NewCompte;
    }

    public function afficherComptes() {
        foreach ($this->_comptes as $comptes) {
            echo $comptes;
        }
    }

    public function __toString() {
        return "$this->_nom $this->_prenom ". $this->getAge(). " ans ";  // il faut concatener quand ce n'est pas une variable
    }
}