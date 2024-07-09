<?php 
require_once 'classes/Coach.php';
class Equipe {
    private $nom ;
    private $coach;
    private $joueurs = [];
    
    public function __construct($nom ,Coach $coach) {
        $this->nom = $nom;
        $this->coach = $coach;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getCoach(){
        return $this->coach;
    }

    public function setNom($nom) {
        return $this->nom = $nom;
    }

    public function setCoach(Coach $coach) {
        return $this->coach = $coach;
    }

    public function addPlayers(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }
    
    public function getPlayers() {
        return $this->joueurs;
    }

    public function getDetails(){
        return  "Équipe: {$this->nom}, Entraîneur: {$this->coach->getDetails()} \n \n";

    }

}



