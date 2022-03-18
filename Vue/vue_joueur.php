
<head>
    <link rel="stylesheet" href="menu.css">
    <meta charset="utf-8" />
    <title>Accueil PHP TP</title>

</head>

<body>
<header>
    <ul>
        <?php foreach($reponseJoueurNbpartie as $ligne) { ?>
        <li> <?php echo ($ligne['idjoueur'].' '); echo $ligne['nbparties_sum']; ?> </li>
        <?php } ?>
    </ul>
</header>



</body>

