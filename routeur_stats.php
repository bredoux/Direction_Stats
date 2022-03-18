<?php

require_once('Vue/Menuprincipal.php');
require_once ('Vue/menustats.php');



require_once('Controller/ct_reservation.php ');
require_once('Controller/ct_clients.php');
require_once('Controller/ct_joueur.php');
require_once ('Controller/ct_utilisateur.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'stat_reservation') {

        MoyenneNbPersonnePartie();
    }
    if ($_GET['action'] == 'stat_joueur') {

        Joueur_Stat_page();

    }
    if ($_GET['action'] == 'stat_client')
    {

    }
    if ($_GET['action'] == 'Les_stats')
    {
        require("routeur_stats.php");

    }
    if ($_GET['action'] == 'interactions' and Verifrole("1")==true) {

        require("routeur_interactions.php");
    }
    if ($_GET['action'] == 's') {

        ;

    }


} ?>
<?php
