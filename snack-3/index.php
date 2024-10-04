<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Insegnanti e PM</h1>

    <div class="teachers">
        <h3>Teachers</h3>
        <?php foreach ($db['teachers'] as $teacher) { ?>
        <p><?= $teacher['name'] . ' ' . $teacher['lastname'] ?></p>
        <?php } ?>
    </div>

    <div class="pm">
        <h3>PM</h3>
        <?php foreach ($db['pm'] as $singlePm) { ?>
        <p><?= $singlePm['name'] . ' ' . $singlePm['lastname'] ?></p>
        <?php } ?>
    </div>

</body>

</html>