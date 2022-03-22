<?php

class Compte {
    private string $_compte;
    private float $_solde;  //float : nombre avec décimale
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $compte, float $solde, string $devise, Titulaire $titulaire) {
        $this->_compte = $compte;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterComptes($this);
    }

    public function getCompte() {
        return $this->_compte;
    }
    public function getSolde() {
        return $this->_solde;
    }
    public function getDevise() {
        return $this->_devise;
    }
    public function getTitulaire() {
        return $this->_titulaire;
    }
 

    public function crediter(float $montant) {      //fonction pour créditer 
        $this->_solde += $montant;                  // += : permet d'additionner le montant à la solde
    }
    public function debiter(float $montant) {
        $this->_solde -= $montant;                  // -= : permet de soustraire le montant de la solde
    }
    public function virement(float $montant, Compte $compte) {
        echo "Virement de $montant € a été effectué<br>";
        $this->debiter($montant);                   // réutilisation des fonctions précédentes
        $compte->crediter($montant);
    }

    public function setCompte(string $NewCompte) {
        $this->_compte = $NewCompte;
    }
    public function setSolde(float $NewSolde) {
        $this->_solde = $NewSolde;
    }
    public function setDevise(string $NewDevise) {
        $this->_devise = $NewDevise;
    }
    public function setTitulaire(string $NewTitulaire) {
        $this->_titulaire = $NewTitulaire;
    }

    public function __toString() {
        return "$this->_titulaire possède un $this->_compte de : $this->_solde $this->_devise .<br>";
    }
}