<?php
include('connect.php');
$query="delete from utilisateur where num_util = ".$_GET['num_util'];
$res = mysqli_query($connect,$query);
if ($res == 1){
    header ("location:listren.php");
}else{
    echo "<h2>Supprimer echouée</h2>";
}
?>