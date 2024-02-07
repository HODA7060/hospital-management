<?php
session_start();
include('connect.php');
$email=$_POST['email_secrt'];
$pwd=$_POST['password_secrt'];
$query="select * from secretaire where email_secrt ='".$email."' and password_secrt='".$pwd."'";
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_assoc($result)){
    $_SESSION['connecte']='ok';
    $_SESSION['email_secrt']=$row['email_secrt'];
    $_SESSION['password_secrt']=$row['password_secrt'];
    header('location:listren.php');
}else{
    $_SESSION['email_secrt']=$email;
    $_SESSION['erreur']="Email et/ou mot de passe non valide";
    
    header('location: adminlog.php');
}