<?php



function CreateSalle(string $mdp, string $pseudo, string $role)
{

    $dao = new UtilisateurDAO();
    $mdp= password_hash($mdp,PASSWORD_DEFAULT);
    $pseudo = htmlspecialchars($pseudo, ENT_QUOTES);
    $dao->insertion($pseudo,$mdp,$role);


}
