<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;
    di
    }
    header .logo {
        font-size: 25px;
    }
    header .logo span {
        color: #93d6d0;
    }
    header .menu a {
        position: relative;
        margin: 0 10px;
        text-decoration: 0;
        color: #999;
        transition: 0.5s;
        
    }
    header .menu a:before {
        position: absolute;
        top: -2px;
        content: "";
        width: 0;
        height: 2px;
        background-color: #93d6d0;
        transition: 0.5s;
    }
    header .menu a:hover:before {
        width: 100%;
    }
    header .menu a:hover {
        color: #000;
    }
    #secrt{
        font-size:14px;
        font-family: cursive;

    }
    </style>
</head>
<body>
<header>
        <div class="logo"> <span>D</span>entist</div>
        <ul class="menu">
            <a href="index.php">Actuell</a>
            <a href="compt.php">Créer compte</a>
            <a href="#">Vous avez un compte !</a>
            <a href="login.php">Se connecter</a>
            <a href="#">Contact</a>
            <a href="adminlog.php" id="secrt">Secretaire</a>
        </ul>
    </header>
    
</body>
</html>