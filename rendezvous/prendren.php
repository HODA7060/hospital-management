<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prender Rendez-vous</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
include('header.php');

?>
    <h1>Prender rendez-vous</h1>
    <form action="bon.php" method="POST">
        <div class="parent">
            <div class="child">
                <label for="date_rend">Date de rendez-vous</label>
            </div>
            <div class="child">
                <input type="date" name="date_rend">
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label for="date_rend">Heure rendez-vous</label>
            </div>
            <div class="child">
                <input type="time" name="heure_rend">
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label for="date_rend">Observation</label>
            </div>
            <div class="child">
                <input type="text" name="obser_rend">
            </div>
        </div>
        <button type="submit">Enregestrer</button>
        <a href="index.php">Annuler</a>
    </form>
</body>
</html>