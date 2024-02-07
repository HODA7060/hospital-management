<?php 
session_start(); 
include "connect.php";

if (isset($_POST['nom_util']) && isset($_POST['prenom_util']) && isset($_POST['tel_util']) && isset($_POST['email_util']) 
    && isset($_POST['pass_util']) && isset($_POST['conf'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$nom_util = validate($_POST['nom_util']);
	$prenom_util = validate($_POST['prenom_util']);
	$tel_util = validate($_POST['tel_util']);
	$email_util = validate($_POST['email_util']);
	$pass_util = validate($_POST['pass_util']);
	$conf = validate($_POST['conf']);

	$user_data = 'nom_util='.$nom_util. '&prenom_util='.$prenom_util.'&tel_util='.$tel_util. '&email_util='.$email_util. '&pass_util='.$pass_util ;


	if (empty($nom_util)) {
		header("Location: compt.php?error=Nom obligatoire&$user_data");
	    exit();
	}else if(empty($pass_util)){
        header("Location: compt.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	}
	else if(empty($conf)){
        header("Location: compt.php?error=Confirmer oblogatoire&$user_data");
	    exit();
	}

	else if(empty($prenom_util)){
        header("Location: compt.php?error=Prenom obligatoire&$user_data");
	    exit();
	}
	else if(empty($tel_util)){
        header("Location: compt.php?error=Telephone obligatoire&$user_data");
	    exit();
	}
	
	else if(empty($email_util)){
        header("Location: compt.php?error=Email obligatoire&$user_data");
	    exit();
	}

	else if($pass_util !== $conf){
        header("Location: compt.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		
       // $pass_util = md5($pass_util);
	    $query = "SELECT * FROM utilisateur WHERE email_util='$email_util' ";
		$result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result) > 0) {
			header("Location: compt.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO utilisateur(nom_util,prenom_util,tel_util,email_util,pass_util) VALUES('$nom_util', '$prenom_util', '$tel_util','$email_util','$pass_util')";
           $result2 = mysqli_query($connect, $sql2);
           if ($result2) {
           	 header("Location: compt.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: compt.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: compt.php");
	exit();
}
$n=mysqli_query($connect,$query);
if($n==1) {
$_SESSION['connecte']='ok';
 header('location:compt.php');
}