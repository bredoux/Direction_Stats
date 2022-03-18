<?php

class Joueur extends Modele
{
    public function NombrepartieClient()
    {
        $requete = 'select idjoueur,SUM(nb_parties) as nbparties_sum from joueur group by idjoueur';
        $resultat= $this->bddconnect();
        $resultat= $resultat->prepare($requete);
        $resultat->execute();
        return $resultat;

    }
}