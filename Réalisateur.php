<?php

class Réalisateur extends Personne
{

    private array $_films;


public function __construct($nom, $prenom, $sexe, $datenaissance)
{
    parent::__construct($nom, $prenom, $sexe, $datenaissance) ;

    $this->_films = [];
}

public function addFilm($film)
{   
 
    $this->_films[]= $film;
} 

public function __toString()
{
    return " du Nom :". $this->getNom()."<br>"."Prénom  :". $this->getPrenom()."<br>"."Sexe :". $this->getSexe()."<br>"."Date de Naissance :". $this->getDatenaissance()."<br>";
}

<<<<<<< HEAD
                 /* Affichage info Réalisateur*/
=======
>>>>>>> 163a9f5e0ee2fa6a07c9018394560bf6129367fc
public function afficherfilm()
{
    echo 'le réalisateur'. $this. 'a réalisé '." ";
    foreach($this->_films as $film)
    {
        echo $film."<br>";
    }
}



}