<?php

abstract class Modele
{
    protected $bdd;

    protected function bddconnect()
    {
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=escapegame', 'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            echo "" . '</br>';
            return $this->bdd;
        }
        catch (Exception $e)
        {
            die('Erreur de connection à la base : ' . $e->getMessage());
        }
    }

    protected function executerRequete($sql, $params) {
            $requete = $this->bddconnect()->prepare($sql);
            $resultat=$requete->execute($params);

        return $resultat;
    }





}
