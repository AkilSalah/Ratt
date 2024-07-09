<?php 

require_once 'classes/Arbitre.php';
require_once 'classes/Equipe.php';

class footMatch {

    private $equipe1;
    private $equipe2;
    private $date;
    private $heure ;
    private $arbitre ;
    private $events = [];

    public function __construct(Equipe $equipe1, Equipe $equipe2, $date, $heure, Arbitre $arbitre) {
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->date = $date;
        $this->heure = $heure;
        $this->arbitre = $arbitre;
    }

    public function getEquipe1() {
        return $this->equipe1;
    }
    public function getEquipe2() {
        return $this->equipe2;
    }
    public function getDate() {
        return $this->date;
    }
    public function getHeure() {
        return $this->heure;
    }
    public function getArbitre() {
        return $this->arbitre;
    }
    public function setEquipe1($equipe1) {
        $this->equipe1 = $equipe1;
    }
    
    public function setEquipe2($equipe2) {
        $this->equipe2 = $equipe2;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function setHeure($heure) {
        $this->heure = $heure;
    }
    
    public function setArbitre(Arbitre $arbitre) {
        $this->arbitre = $arbitre;
    }

    public function addEvents(Event $event){
        $this->events[] = $event;
    }
    public function getEvents(){
        return $this->events;
    }

    public function getDetails() {
        return "Match: {$this->equipe1->getDetails()} vs {$this->equipe2->getDetails()}, Date: {$this->date}, Heure: {$this->heure}, Arbitre: {$this->arbitre->getDetails()}";
    }
    





    



}

