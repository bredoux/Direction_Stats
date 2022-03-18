<?php
require ('modele/reservation.php');

 function MoyenneNbPersonnePartie(){

    $reservation= new reservation();
    $MoyenneNbpersonneparsalle=$reservation->MoyenneNombreparSalle();
    include("Vue/vue_reservation.php");
 }

 function nombrepartiemoyenneclient(PDOStatement $nom)
    {
        $reservation= new reservation();


    }

