<?php
include('connect.php');
session_start();
$connect = mysqli_connect($localhost,$user,$pw,$db);
$query="insert into rendezvous(date_rend,heure_rend,obser_rend,num_util) values('".$_POST['date_rend']."','".$_POST['heure_rend']."','".$_POST['obser_rend']."','".$_SESSION['num_util']."')";
if ($result=mysqli_query($connect,$query)){
            
    header("location:consulren.php");
}
else{
    header("location: bon.php");
}
   
?>