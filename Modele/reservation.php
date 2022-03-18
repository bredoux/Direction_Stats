<?php
require('Modele/Modele.php');

class reservation extends Modele
{
    public int $reservateur;
    public int $salle_reserve;
    private DateTime $date_heure;
    private int $temps_resa;
    private int $nombre_joueur;

 public function Toutes_Reservation()
{
    $requete = 'select * from reservation';
    $resultat= $this->bddconnect();
    $resultat= $resultat->prepare($requete);
    $resultat->execute();
    return $resultat;


}
    public function MoyenneNombreparSalle()
    {
        $requete = 'select salle_reserve,AVG(nombre_joueur) as moyenne from reservation group by salle_reserve';
        $resultat= $this->bddconnect();
        $resultat= $resultat->prepare($requete);
        $resultat->execute();
        return $resultat;


    }


    


}