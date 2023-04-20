<h1> Exercice Livre</h1>


<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur :</p>

<h2>Résultat</h2>

<?php

require "livre.php";
require "auteur.php";

$auteur1 = new Auteur ("King", "Stephen");

$livre1 = new Livre ("Ca", 1986, 1338, 20, $auteur1);
$livre2 = new Livre ("Simetierre", 1983, 374, 15, $auteur1);
$livre3 = new Livre ("Le Fléau", 1978, 823, 14, $auteur1);
$livre4 = new Livre ("Shining", 1977, 447, 16, $auteur1);

echo $auteur1;
echo $livre1;
