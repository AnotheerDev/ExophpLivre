<?php 

class Auteur {
    private string $_nom;
    private string $_prenom;
    private array $_bibliographie;


    function __construct(string $_nom, string $_prenom) {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_bibliographie = [];
    }
    

     // getter et setter  pour chaque attribut de la classe Auteur:

    public function getNom(){
        return $this->_nom;
     }

    public function setNom($_nom) {
        $this->_nom = $_nom;
    }


    public function getPrenom(){
        return $this->_prenom;
     }

    public function setPrenom($_prenom) {
        $this->_prenom = $_prenom;
    }

    public function __toString(){
        return  $this->_nom . " " . $this->_prenom . "<br>";
    }


    // fonction qui permet d'ajouter un livre à la bibilographie
    public function AjoutLivre(Livre $livre){
        $this->_bibliographie[] = $livre;
    }
    

    // fonction qui permet de sortir toute la bibiliographie d'un auteur 
    public function afficherBibliographie() {
        echo "<p>Bibliographie de" .$this->_nom. "" .$this->_prenom. "</p>";
        foreach($this->_bibliographie as $livre){
            echo $livre. "<br>";
        }
    }

}