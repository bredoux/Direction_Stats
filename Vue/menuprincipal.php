

<!DOCTYPE html>

  <head>
      <link rel="stylesheet" href="menu.css">
    <meta charset="utf-8" />
    <title>Accueil PHP TP</title>

  </head>

  <body>
  <header>
      <ul>
          <li> <a href="../index.php">Retour à l'index </a></li>
          <li> <a class="a" href=../index.php?action=stat_reservation> les statistiques de reservations </a></li>
          <li> <a class="a" href=../index.php?action=stat_joueur> les statistiques des Joueurs </a></li>
          <?php if($_SESSION["role"]=="Administrateur") {?> <li> <a class="a" href=../index.php?action=> Interface Administrateur Pour utilisateur</a></li><?php } ?>
          <?php if($_SESSION["role"]=="Administrateur") {?> <li> <a class="a" href=../index.php?action=> Interface Administrateur Pour reservations</a></li><?php } ?>
          <?php if($_SESSION["role"]=="Administrateur") {?> <li> <a class="a" href=../index.php?action=> Interface Administrateur Pour salles</a></li><?php } ?>
          <?php if($_SESSION["role"]=="Administrateur") {?> <li> <a class="a" href=../index.php?action=> Interface Administrateur Pour </a></li><?php } ?>
      </ul>
  </header>



</body>
