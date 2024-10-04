<?php
require_once __DIR__ . '/classes.php';

// Se presente, recupero il voto massimo dall'input dell'utente. Se il campo è vuoto, il filtro non verrà applicato
$maxGrade = isset($_GET['max_grade']) && $_GET['max_grade'] !== '' ? $_GET['max_grade'] : null;

// Se presente, recupero il linguaggio preferito dall'input dell'utente. Se il campo è vuoto, il filtro non verrà applicato
$prefLanguage = isset($_GET['preferred_language']) && $_GET['preferred_language'] !== '' ? $_GET['preferred_language'] : null;
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

            <div class="mb-3">
                <label for="preferred_language" class="form-label">Inserisci un linguaggio preferito:</label>
                <input type="text" id="preferred_language" name="preferred_language" class="form-control"
                    value="<?= $prefLanguage ?>">
            </div>

            <button type="submit" class="btn btn-primary w-100">Filtra</button>
        </form>

        <?php if ($maxGrade !== null || $prefLanguage !== null) { ?>
        <h2 class="text-center">
            <?php if ($maxGrade !== null) { ?> Studenti con il voto medio inferiore a <?= $maxGrade ?><?php } ?><br>
            <?php if ($prefLanguage !== null) { ?> Linguaggio preferito: <?= $prefLanguage ?><?php } ?>
        </h2>
        <?php } ?>

        <?php foreach ($classi as $classe => $studenti) { ?>
        <h3 class="mt-4"><?= $classe ?></h3>
        <ul class="list-group">
            <?php foreach ($studenti as $studente) { 


                    // CONTROLLO DEL VOTO MEDIO SUFFICIENTE IN RIFERIMENTO ALLO SNACK 4B:
                    // if ($studente['voto_medio'] >= 6) {
                    //     echo "<li>{$studente['nome']} {$studente['cognome']} ~ Età: {$studente['anni']} ~ Voto medio: {$studente['voto_medio']}</li>";
                    // }

                    
                    // Controllo per il voto medio massimo e il linguaggio preferito
                    if (($maxGrade === null || $studente['voto_medio'] < $maxGrade) && 
                        ($prefLanguage === null || strtolower($studente['linguaggio_preferito']) === strtolower($prefLanguage))) { ?>
            <li class="list-group-item">
                <?= $studente['nome'] . ' ' . $studente['cognome'] ?> ~ Età: <?= $studente['anni'] ?> ~ Voto medio:
                <?= $studente['voto_medio'] ?> ~ Linguaggio preferito: <?= $studente['linguaggio_preferito'] ?>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>

</body>

</html>