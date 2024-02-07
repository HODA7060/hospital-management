<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<header class="header">
        <a href="#" id="logo"><span>care</span> point</a>

        <nav class="navbar">
            <a href="index2.php">Accueil</a>
            <a href="#">About</a>
            <a href="#">Gellery</a>
            <?php
                if(!isset($_SESSION['connecte'])){
            ?>
            <a href="compt.php">Créer compte</a>
            <a href="login.php">Se connecter </a>
            <?php
                }else{
            ?>
            <a href="logout.php">Se déconnecter </a>
            
            <?php
                }
            ?>
            <a href="#">Contact </a>
        </nav>

        <div class="icons">
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            
        </div>

        <a href="#" id="menu_bars" class="fas fa-bars"></a>
    </header>

    
    
