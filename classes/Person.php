<?php 

abstract class Person{
    protected $nom;
    protected $adresse;
    protected $numeroTelephone;

    public function __construct($nom, $adresse, $numeroTelephone){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->numeroTelephone = $numeroTelephone;
    }
    
    abstract public function getDetails();

}