<?php

class UtilisateurDAO extends Modele
{

    public function obtenirrole($nom)
    {
        $requete = 'select role from user WHERE nom = :nom';
        $reponse=$this->executerRequete($requete,array('nom'=>$nom));
        return $reponse;

    }


    public function existpseudo($pseudo)
    {
        $verif= false;
        $requete = 'select nom from user WHERE nom = :pseudo';
        $tableaupseudo=$this->executerRequete($requete,array('pseudo'=>$pseudo));
        if (isset($tableaupseudo))
        {

            $verif=true;
        }
        return $verif;
    }

    public function mdpvalide($pseudo,$mdp)
    {
        $verif= false;
        $requete = 'select nom from user WHERE nom = :pseudo AND mdp = :mdp';
        $result=$this->executerRequete($requete,array('pseudo'=>$pseudo, 'mdp'=>$mdp));
        if (isset($result))
        {

            $verif=true;
        }
        return $verif;
    }

    public function insertion($pseudo,$mdp,$roles)
    {

        $requete = 'Insert into user(nom,mdp,role) values (:pseudo,:mdp,:roles)';
        $result=$this->executerRequete($requete,array('pseudo'=>$pseudo, 'mdp'=>$mdp, 'roles'=>$roles));

    }

    public function edition($pseudo,$mdp,$roles)
    {

        $requete = 'Update user set (nom,mdp,role) = :pseudo,:mdp,:roles where nom = :pseudo';
        $result=$this->executerRequete($requete,array('pseudo'=>$pseudo, 'mdp'=>$mdp, 'roles'=>$roles));

    }
}