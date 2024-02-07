<?php
include('header.php');
$titre="Créer compte";
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Créer Un compte</title>
	<link rel="stylesheet"  href="styl.css">
</head>
<body>-

     <form action="valcomp.php" method="post">
     	<h2>Créer un compte</h2>
               <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>

               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>

               <!--<label>Nom</label>-->
               <div >
                    <?php if (isset($_GET['nom_util'])) { ?>
                         <input type="text" name="nom_util"  placeholder="Nom"value="<?php echo $_GET['nom_util']; ?>">
                    <?php }else{ ?>
                         <input type="text" name="nom_util" placeholder="Nom" >
                    <?php }?>
               </div>
               <!--<label>Prénom</label>-->
               <div >
                    <?php if (isset($_GET['prenom_util'])) { ?>
                         <input type="text"  name="prenom_util" placeholder="Prénom" value="<?php echo $_GET['prenom_util']; ?>">
                    <?php }else{ ?>
                         <input type="text" name="prenom_util" placeholder="Prénom" >
                    <?php }?>
               </div>
               <!---<label>Telephone</label>-->
               <div >
                    <?php if (isset($_GET['tel_util'])) { ?>
                         <input type="text" name="tel_util" placeholder="Telephone" value="<?php echo $_GET['tel_util']; ?>" >
                    <?php }else{ ?>
                         <input type="tel" name="tel_util" placeholder="Telephone" >
                    <?php }?>  
               </div>
               <!--<label>Email</label>-->
               <div >
                         <?php if (isset($_GET['email_util'])) { ?>
                              <input type="text" name="email_util" placeholder="Example@gmail.com" value="<?php echo $_GET['email_util']; ?>">
                         <?php }else{ ?>
                              <input type="tel" name="email_util" placeholder="Example@gmail.com"  >
                         <?php }?>
               </div>

               <!---<label>Mot de passe</label>-->
               <div >
                    <input type="password" name="pass_util" placeholder="Mot de passe" >
               </div>
               <!--<label>Confirmer</label>-->
               <div >
                    <input type="password" name="conf" placeholder="confirmer" >
               </div>
               <button type="submit">Enregistrer</button>
               <a href="login.php" class="ca">Vous avez un compte ?</a>
         
     </form>
</body>
</html>