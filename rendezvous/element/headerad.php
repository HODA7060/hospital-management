<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .headerr {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 10px 5%;
    position: fixed;
    top:0;
    left:0;
    }
    .headerr .logo {
        font-size: 25px;
    }
    .headerr .logo span {
        color: #93d6d0;
    }
    .headerr .menu .a1 {
        position: relative;
        margin: 0 10px;
        text-decoration: 0;
        color: #999;
        transition: 0.5s;
    }
    .headerr .menu .a1:before {
        position: absolute;
        top: -2px;
        content: "";
        width: 0;
        height: 2px;
        background-color: #93d6d0;
        transition: 0.5s;
    }
    .headerr .menu .a1:hover:before {
        width: 100%;
    }
    .headerr .menu .a1:hover {
        color: #000;
    }
    </style>
</head>
<body>
     <header class="headerr">
        <div class="logo"> <span>D</span>entist</div>
        <ul class="menu">
            <a href="listren.php" class="a1">List de rendez-vous</a>
            <a href="index.php" class="a1">Se déconnecter</a>
        </ul>
    </header>
</body>
</html>