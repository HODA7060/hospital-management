<?php 
session_start();

if (isset($_SESSION['email_util']) && isset($_SESSION['pass_util'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
     <h1 class="h1">Bienvenue dans notre clinique,<?php echo $_SESSION['nom_util']; ?></h1>
     <p><a href="prendren.php"> Prenez un Rendez-vous </a></p>
     <p><a href="logout.php">Quitt</a></p>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>