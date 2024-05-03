<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aléa RPG - <?php echo $title ? $title : "Game" ?></title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1> <?php echo $title ? $title : "Game" ?> </h1>