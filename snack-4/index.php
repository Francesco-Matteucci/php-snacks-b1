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
    <!-- Custom style -->
    <link href="style.css" rel="stylesheet">
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

        <?php foreach ($classi as $classe => $studenti) { 
            $showClass = false;

            // Verifico se ci sono studenti che soddisfano i criteri di filtraggio
            foreach ($studenti as $studente) {
                if (($maxGrade === null || $studente['voto_medio'] < $maxGrade) && 
                    ($prefLanguage === null || strtolower($studente['linguaggio_preferito']) === strtolower($prefLanguage))) {
                    $showClass = true;
                }
            }

            // Mostro la classe solo se ci sono studenti che soddisfano i criteri del filtraggio
            if ($showClass) { ?>
        <h3 class="mt-4"><?= $classe ?></h3>
        <div class="row justify-content-center">
            <?php foreach ($studenti as $studente) { 


                // CONTROLLO DEL VOTO MEDIO SUFFICIENTE IN RIFERIMENTO ALLO SNACK 4B:
                // if ($studente['voto_medio'] >= 6) {
                //     echo "<li>{$studente['nome']} {$studente['cognome']} ~ Età: {$studente['anni']} ~ Voto medio: {$studente['voto_medio']}</li>";
                // }

                // Controllo per il voto medio massimo e il linguaggio preferito
                if (($maxGrade === null || $studente['voto_medio'] < $maxGrade) && 
                    ($prefLanguage === null || strtolower($studente['linguaggio_preferito']) === strtolower($prefLanguage))) { ?>
            <div class="col-md-6 col-lg-3 col-xl-2">
                <div class="card mb-4">
                    <img src="https://robohash.org/<?= $studente['nome'] ?>" class="card-img-top img-fluid"
                        alt="Foto di <?= $studente['nome'] ?>">
                    <div class="card-body">
                        <h6 class="card-title"><?= $studente['nome'] . ' ' . $studente['cognome'] ?></h6>
                        <p class="card-text">Età: <?= $studente['anni'] ?></p>
                        <p class="card-text">Voto medio: <?= $studente['voto_medio'] ?></p>
                        <p class="card-text">Linguaggio preferito: <?= $studente['linguaggio_preferito'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>

</body>

</html>