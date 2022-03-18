

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bonjour</title>
</head>

<body>
<p>  <?php echo $_SESSION["pseudo"] ?> </p>>
<?php if ($roledirecteur==true) { ?><button id="btn_gestion" onclick="document.location.href='../index.php?action=stat_reservation'">"> gestion base de données</button> <?php } ?>
<?php if ($rolegestionnaire==true or $roledirecteur==true) {?><button id="btn_stats" onclick="document.location.href='../index.php?action=stat_joueur'"> afficher les statistiques </button> <?php } ?>



</body>
</html>


<?php
