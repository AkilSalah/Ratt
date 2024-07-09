<?php

require_once './classes/Arbitre.php';
require_once './classes/Coach.php';
require_once './classes/Equipe.php';                             
require_once './classes/Event.php';                   
require_once './classes/Joueur.php';               
require_once './classes/Match.php';    

$coach1 = new Coach("Akil" , "jnane colone" ,"0682397103");

$team1 = new Equipe("equipeA" , $coach1);

$coach2 = new Coach("Abdo" , "Hay salam" ,"0000111122");

$team2 = new Equipe("equipeB" , $coach2);

echo $team1->getDetails();

echo $team2->getDetails();

$joueur1 = new Joueur("Cr7" , "10/10/2000","Les milieux défensifs",$team1);
$joueur1->setNom("Messi");

$joueur2 = new Joueur("Hamdallah" , "10/02/2002","L'avant-centre",$team1);

$team1->addPlayers($joueur1);

$team2->addPlayers($joueur2);

foreach($team1->getPlayers() as $joueur){

    echo $joueur->getDetails() . "\n";

}

$arbitre1 = new Arbitre("Ahmad " ,"Sidi abdelKarim" ,"1234567890");

$arbitre2 = new Arbitre("Saad " ,"elmaarif" ,"0000000000");

$arbitre3 = new Arbitre("Badr Eddine " ,"Sidi Bernoussi" ,"1111111111");

$match1 = new footMatch($team1,$team2,"09/07/2024","12:30",$arbitre3);

echo $match1->getDetails()."\n\n";

$event1 = new Event("but" ,"32:22" , $joueur1 , $match1);

$event2 = new Event("Carton jaune", "40:55", $joueur2, $match1);

$match1->addEvents($event1);

$match1->addEvents($event2);

foreach($match1->getEvents() as $events) {

    echo $events->getDetails()."\n";
    
}

