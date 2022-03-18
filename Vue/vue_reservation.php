
<head>
    <link rel="stylesheet" href="menu.css">
    <meta charset="utf-8" />
    <title>Accueil PHP TP</title>

</head>

<body>
<header>
    <ul>
        <?php foreach($MoyenneNbpersonneparsalle as $ligne) { ?>
        <li> <?php echo ($ligne['salle_reserve'].' '); echo $ligne['moyenne']; ?> </li>
        <?php } ?>
    </ul>
</header>
<canvas id="myChart" width="400" height="400"></canvas>


</body>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>