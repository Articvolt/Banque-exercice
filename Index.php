<h1>POO Banque</h1>

<p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des titulaires et leurs 
comptes bancaires respectifs.</p>


<?php

require "Compte.php";
require "Titulaire.php";        //ne pas oublier le nom de domaine

$titulaire1 = new Titulaire ("Christophe", "Apple", "1982-01-17");
$titulaire2 = new Titulaire ("Jean","Margoulin", "1999-05-25");

$compte1 = new Compte ("livret A", 358.32, "€", $titulaire1);
$compte2 = new Compte ("Compte courant", 2000, "€", $titulaire1);
$compte3 = new Compte ("compte courant", 5056, "francs", $titulaire2);


$titulaire1->afficherComptes();
echo "<br>";

$compte1->virement(100, $compte2);      //demande le $montant puis le compte cible $compte2

$titulaire1->afficherComptes();
echo "<br>";


$compte2->debiter(100);                 //demande la fonction debiter avec le ($montant)

$titulaire1->afficherComptes();
echo "<br>";

$compte2->crediter(500);

$titulaire1->afficherComptes();
echo "<br>";

$titulaire2->afficherComptes();
echo "<br>";

