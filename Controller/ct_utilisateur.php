<?php
require ("Modele/UtilisateurDAO.php");






 function Verifrole($idcollaborateur)
{
    if ($_SESSION['role']=="directeur")
    {
        return true;

    }


}
function Logincompte()
{
    $dao = new UtilisateurDAO();

    $bool = $dao->mdpvalide($id, $mdp);
    echo $bool;
    if ($bool == true) {
        $role = $dao->obtenirrole($id);


        session_start();
        $_SESSION['pseudo'] = $id;
        foreach ($role as $petitrole) {
            $_SESSION['role'] = $petitrole['role'];
        }

    } else {
        echo("erreur de connexion");
        header("index.php");


    }
}

    function Connexion(string $nom, string $mdp) : bool {
        $dao= new UtilisateurDAO();
        $nom=$_POST['identifiant'];
        $mdp=$_POST['mdp'];
        $password= password_hash($mdp,PASSWORD_DEFAULT);
        $returnvalue=true;
        if (is_string($nom) &&
            is_string($mdp)) {
            $validnom = htmlspecialchars($nom, ENT_QUOTES);


            if (strcmp($validnom, $nom) != 0) {
                echo "erreur; caracteres HTML dans le nom <br>";
                $returnvalue = FALSE;
            }
            /* verifie si nom existant */

            if ($returnvalue) {
                if (!$dao->existpseudo($validnom)) {
                    echo "Pseudo n'existe pas; veuillez vous inscrire <br>";
                    $returnvalue = FALSE;

                } else
                {
                    $isPasswordCorrect = $dao->mdpvalide($nom, $mdp);
                    if (!$isPasswordCorrect)
                    {
                        echo "<br>";
                        $returnvalue = FALSE;

                    } else {
                        session_start();
                        $_SESSION['role'] =  $dao->obtenirrole($nom);
                        $_SESSION['pseudo'] = $validnom;
                        $returnvalue=true;

                        echo " <br> Vous êtes connecté !";
                    }
                }
            }
        }
        return $returnvalue;

    }
    function CreateUser(string $mdp, string $pseudo, string $role)
    {

        $dao = new UtilisateurDAO();
        $mdp= password_hash($mdp,PASSWORD_DEFAULT);
        $pseudo = htmlspecialchars($pseudo, ENT_QUOTES);
        $dao->insertion($mdp,$pseudo,$role);


    }



