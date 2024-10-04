<?php
require_once __DIR__ . '/classes.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4 - Classi e Studenti</title>
</head>

<body>
    <h1>Snack 4 - Classi e Studenti</h1>

    <?php foreach ($classi as $classe => $studenti) { ?>
    <h2><?= $classe ?></h2>
    <ul>
        <?php foreach ($studenti as $studente) {
            
                // Effettuo un controllo per vedere se il voto medio di uno studente è sufficiente
                if ($studente['voto_medio'] >= 6) { ?>
        <li><?= $studente['nome'] . ' ' . $studente['cognome'] ?> ~ Età: <?= $studente['anni'] ?> ~ Voto medio:
            <?= $studente['voto_medio'] ?></li>
        <?php } ?>
        <?php } ?>
    </ul>
    <?php } ?>

</body>

</html>