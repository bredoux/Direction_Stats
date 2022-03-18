<?php
if(isset($_SESSION))
{

    require('Vue/Menuprincipal.php');
}
else
{
    require_once("Vue/vue_login.php");
}

require_once('Controller/ct_reservation.php ');
require_once('Controller/ct_clients.php');
require_once('Controller/ct_joueur.php');
require_once ('Controller/ct_utilisateur.php');

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'Les_stats')
    {
        include("routeur_stats.php");

    }
    if ($_GET['action'] == 'interactions' and Verifrole("1")==true) {

        include("routeur_interactions.php");
    }
    if ($_GET['action'] == 'identification') {
        $nom=$_POST['identifiant'];
        $mdp=$_POST['mdp'];
        $acces=Connexion($nom,$mdp);

        if ($acces == true)
        {

            require('Vue/Menuprincipal.php');
        }
        else
        {
            echo("erreur, le mot de passe ou l'identifiant n'est pas valide");
        }







    }


}
