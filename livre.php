<?php

class Livre {
    private string $_title;
    private int $_parution;
    private int $_nbPage;
    private int $_price;
    private Auteur $_auteur;


    public function __construct(string $title, int $nbPage, int $parution, int $price, Auteur $auteur){
        $this->_title = $title;
        $this->_nbPage = $nbPage;
        $this->_parution = $parution;
        $this->_price = $price;
        $this->_auteur = $auteur;
        $this->_auteur->AjoutLivre($this);

    }


         // getter et setter  pour chaque attribut de la classe Livre:


    public function getPrice(){
        return $this->_price;
    }

    public function setPrice($price){
        $this->_price = $price;
    }

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title){
        $this->_title = $title;
    }

    public function getParution(){
        return $this->_parution;
    }

    public function setParution($parution){
        $this->_parution = $parution;
    }

    public function getNbPage(){
        return $this->_nbPage;
    }

    public function setNbPage($nbPage){
        $this->_nbPage = $nbPage;
    }
    

    public function __toString(){
        return $this->_title . "(" . $this->_parution . ") : " . $this->_nbPage . " pages " . " / " . $this->_price . "€" ."<br>";
    }

    public function AjoutLivre() {
        
    }
}