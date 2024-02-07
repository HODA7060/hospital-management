
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   <link rel="stylesheet" href="admin.css">
   <!-- <style>
        .form-box{
        display: block;

        }
    </style>-->
</head>
<body>
<!--
        <div class="form-box">
            <form action="" role="form" method="POST" accept-charset="UTF-8">
                <input name="email_secrt" type="email" placeholder="Email secretaire" required><br>
                <input name="password_secrt" type="password" placeholder="Mot de passe" required><br>
                <button class="btn" type="submit" name="login">Se connecter</button>
            </form>
        </div>-

    <form action="validadmin.php" method="post">
        <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <input type="text" name="nom_util" placeholder="Num secretaire"><br>
        <input type="password" name="pass_util" placeholder="Password"><br>
        <button type="submit">Se connecter</button>
    </form>
        -->

        <div class='content'>
   <form action="validadmin.php" method="post">
        <p>
            <div>
                <input type="email" value="<?php if(isset($_SESSION['email_secrt'])) echo
                $_SESSION['email_secrt'] ?>" name='email_secrt' required='required' placeholder='Email..' >
            </div>
        </p>
        <p>
            <div>
                <input type="password" id='pwd' name='password_secrt' required='required'
                placeholder='Password..'>
            </div>
        </p>
        <p>
            <div class="erreur">
                <?php
                if(isset($_SESSION['erreur'])) {
                echo $_SESSION['erreur'];
                $_SESSION['erreur']=null;
                }
                ?>
            </div>
            <button type="submit">Se connecter</button>
        </p>
    </form>
</div>
<p>
<script src="js/script.js"></script>
</body>
</html>