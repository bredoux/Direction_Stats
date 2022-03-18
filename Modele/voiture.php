<?php
/*
class voiture extends vehiculeaccidente
{
    private int $is4x4;
    private int $taillejante;


    public function __construct(String $immatriculation, string $marque, string $modele,int $is4x4, int $taillejante)
    {
        parent::__construct($immatriculation,$marque,$modele);
        $this->setIs4x4($is4x4);
        $this->setTaillejante($taillejante);
    }


    public function setTaillejante(int $taillejante): void
    {
        $this->taillejante = $taillejante;
    }


    public function getTaillejante(): int
    {
        return $this->taillejante;
    }

    public function setIs4x4(int $is4x4): void
    {
        $this->is4x4 = $is4x4;
    }


    public function getIs4x4(): int
    {
        return $this->is4x4;
    }


    public function Addvoiture(Voiture $unevoiture)
    {
        $i=-1;
        foreach ($this->vehicules as unvehicule)
        {
            $i =$i++;
        }
        $this->vehicules[$i]=$unevoiture;


    }


    public function Addmoto(Moto $unemoto)
    {

        $i=-1;
        foreach ($this->vehicules as unvehicule)
        {
            $i =$i++;
        }
        $this->vehicules[$i]=$unemoto;

    }

    $Philippe= new Depanneur('Muller',"Philippe");
    $honda= new Moto("FA546HA","Honda","CBR1000",1000);
    $toyota= new Voiture("BK567JL","Toyota ","Yaris",0,15);
    $philippe->Addvoiture($toyota);
    $philippe->Addmoto($honda);

    $vehicules = $depann1->Getvehicule();
    foreach ($vehicules as $unvehicule)
    {

        if(is_a($unvehicule,'Voiture'))
        {

            echo $unvehicule->getIs4x4();
            echo $unvehicule->getTaillejante();
            echo $unvehicule->getMarque();
            echo $unvehicule->getModele();
        }
        else{if(is_a($unvehicule,'Moto'))
        {
            echo $unvehicule->getcylindree();
            echo $unvehicule->getMarque();
            echo $unvehicule->getModele();
        }
        else
        {echo("erreur, type de véhicules inconnu");

        }
        }

    }

}