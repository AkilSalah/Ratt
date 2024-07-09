<?php
require_once 'classes/Equipe.php';
class Joueur {

    private $nom;
    private $dateNaissance;
    private $position;
    private $equipe;

    public function __construct($nom, $dateNaissance, $position,Equipe $equipe) {
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->position = $position;
        $this->equipe = $equipe;
    }

    public function getNom() { return $this->nom; }
    public function getDateNaissance() { return $this->dateNaissance;}
    public function getPosition() { return $this->position; }
    public function getEquipe() { return $this->equipe; }
    public function setNom($nom) { $this->nom = $nom; }
    public function setDateNaissance($dateNaissance) { $this->dateNaissance= $dateNaissance; }
    public function setPosition($position) { $this->position = $position; }
    public function setEquipe(Equipe $equipe) { $this->equipe = $equipe; }

    public function getDetails(){
        return "Nom: {$this->nom} ,Date de naissance: {$this->dateNaissance} ,Position: {$this->position} , {$this->equipe->getDetails()}";
    }
}