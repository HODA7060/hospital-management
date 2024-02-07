<?php
include('connect.php');
//$query="update utilisateur set nom_util='".$_POST['nom_util']."', prenom_util='".$_POST['prenom_util']."',
//tel_util='".$_POST['tel_util']."', email_util='".$_POST['email_util']."' where
//num_util=".$_POST['num_util'];
$query="UPDATE rendezvous r  join  utilisateur u on  r.num_util=u.num_util SET nom_util='".$_POST['nom_util']."', prenom_util='".$_POST['prenom_util']."',tel_util='".$_POST['tel_util']."', email_util='".$_POST['email_util']."',date_rend='".$_POST['date_rend']."',heure_rend='".$_POST['heure_rend']."' where num_rend=".$_POST['num_rend'];
$n=mysqli_query($connect,$query);
if($n==1){
header("location:listren.php");
}else{
echo "<h2>Modification echouée</h2>";
}

//$query=" select * from  rendezvous r  join  utilisateur u on  r.num_util=u.num_util";