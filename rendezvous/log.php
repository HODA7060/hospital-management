<?php
session_start();
include "connect.php";

if (isset($_POST['email_util']) && isset($_POST['pass_util'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email_util= validate($_POST['email_util']);
    $pass_util =validate($_POST['pass_util']);

   
    if (empty($email_util)){
        header("location: login.php?error= Le nom opligatoire ");
        exit();
    }else if(empty($pass_util)){
        header("location: login.php?error= Le mot de passe  opligatoire ");
        exit();
    }else{
        $query = "select * from utilisateur where email_util= '$email_util' and pass_util = '$pass_util'";
        $result = mysqli_query($connect,$query); 
        if (mysqli_num_rows($result)=== 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['email_util']=== $email_util && $row['pass_util'] === $pass_util ){
                $_SESSION['connecte']='ok';
                $_SESSION['num_util']= $row['num_util'];
                $_SESSION['nom_util']= $row['nom_util'];
                $_SESSION['prenom_util']= $row['prenom_util'];
                $_SESSION['tel_util']= $row['tel_util'];
                $_SESSION['email_util']= $row['email_util'];
                $_SESSION['pass_util']= $row['pass_util'];
                header("location: home.php");
                exit();


            }else{
                header("location: login.php?error=Incorect !");
                exit();
            }
        }else{
            header("location: login.php?error=Incorect nom ou mot de passe !");
            exit();
        }
    }

}else{
    header("Location: login.php");
    exit();
}

?>