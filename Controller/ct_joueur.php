<?php
require("Modele/Joueur.php");

function Joueur_Stat_page()
{
    $Joueurdao= new Joueur();
    $reponseJoueurNbpartie=$Joueurdao->NombrepartieClient();
    require('Vue/vue_joueur.php');

}