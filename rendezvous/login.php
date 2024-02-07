<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body class="body1">
    <form action="log.php" method="post">
        <h2>CONNEXION</h2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <input type="text" name="email_util" placeholder="Votre email ..."><br>
        <input type="password" name="pass_util" placeholder="Votre mot de passe..."><br>
        <button type="submit">Se connecter</button>
        <a href="compt.php" class="ca">Vous n'avez pas un compte!</a>
    </form>
</body>
</html>