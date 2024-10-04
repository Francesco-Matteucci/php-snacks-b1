<?php
require_once __DIR__ . '/classes.php';

// Se presente, recupero il voto massimo dall'input dell'utente
$maxGrade = isset($_GET['max_grade']) ? $_GET['max_grade'] : null;
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4 - Classi e Studenti</title>
    <!-- Bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center">Snack 4 - Classi e Studenti</h1>

        <form method="GET" class="mb-4">
            <div class="mb-3">
                <label for="max_grade" class="form-label">Inserisci un voto medio massimo:</label>
                <input type="number" id="max_grade" name="max_grade" class="form-control" value="<?= $maxGrade ?>"
                    step="0.1">
            </div>
            <button type="submit" class="btn btn-primary w-100">Filtra</button>
        </form>

        <?php if ($maxGrade !== null) { ?>
        <h2 class="text-center">Studenti con il voto medio inferiore a <?= $maxGrade ?></h2>
        <?php } ?>

        <?php foreach ($classi as $classe => $studenti) { ?>
        <h3 class="mt-4"><?= $classe ?></h3>
        <ul class="list-group">
            <?php foreach ($studenti as $studente) { 


                    // CONTROLLO DEL VOTO MEDIO SUFFICIENTE IN RIFERIMENTO ALLO SNACK 4B:
                    // if ($studente['voto_medio'] >= 6) {
                    //     echo "<li>{$studente['nome']} {$studente['cognome']} ~ Età: {$studente['anni']} ~ Voto medio: {$studente['voto_medio']}</li>";
                    // }

                    
                    // Controllo per il voto medio massimo
                    if ($maxGrade === null || $studente['voto_medio'] < $maxGrade) { ?>
            <li class="list-group-item">
                <?= $studente['nome'] . ' ' . $studente['cognome'] ?> ~ Età: <?= $studente['anni'] ?> ~ Voto medio:
                <?= $studente['voto_medio'] ?>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>

</body>

</html>