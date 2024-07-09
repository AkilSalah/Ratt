<?php 

require_once 'classes/Person.php';

class Arbitre extends Person{
    public function getDetails() {
        return "Nom: {$this->nom}, Adresse: {$this->adresse}, Téléphone: {$this->numeroTelephone}";
    }
}