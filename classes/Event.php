<?php 
require_once 'classes/Joueur.php';
require_once 'classes/Match.php';

class Event {
    private $type;
    private $minute;
    private $joueur;
    private $match;

    public function __construct($type, $minute, Joueur $joueur, footMatch $match) {
        $this->type = $type;
        $this->minute = $minute;
        $this->joueur = $joueur;
        $this->match = $match;
    }

    // Getters
    public function getType() {
        return $this->type;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function getJoueur() {
        return $this->joueur;
    }

    public function getMatch() {
        return $this->match;
    }

    // Setters
    public function setType($type) {
        $this->type = $type;
    }

    public function setMinute($minute) {
        $this->minute = $minute;
    }

    public function setJoueur(Joueur $joueur) {
        $this->joueur = $joueur;
    }

    public function setMatch(footMatch $match) {
        $this->match = $match;
    }
    public function getDetails() {
        return "Événement: {$this->type}, Minute: {$this->minute}, Joueur: {$this->joueur->getDetails()}, Match: {$this->match->getDetails()}";
    }
}
