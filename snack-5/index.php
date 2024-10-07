<?php
require_once __DIR__ . '/functions.php';

$palindromeResult = null; 
if (isset($_GET['word'])) {
    $word = $_GET['word'];
    $palindromeResult = isPalindromeWord($word);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <!-- Bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-3">Snack 5 - E' Palindroma?</h1>
        <form method="GET" action="index.php">
            <div class="mb-3">
                <label for="word" class="form-label">Metti una parola:</label>
                <input type="text" class="form-control" id="word" name="word" required>
            </div>
            <button type="submit" class="btn btn-primary">Controlla</button>
        </form>

        <?php if ($palindromeResult !== null) { ?>
        <div class="mt-3">
            <p>
                <?php if ($palindromeResult) { ?>
                <span class="text-success">The word is a palindrome.</span>
                <?php } else { ?>
                <span class="text-danger">The word is not a palindrome.</span>
                <?php } ?>
            </p>
        </div>
        <?php } ?>
    </div>

</body>

</html>