<?php
include('connect.php');
$query="delete from rendezvous where num_rend = ".$_GET['num_rend'];
$res = mysqli_query($connect,$query);
if ($res == 1){
    header ("location:listren.php");
}else{
    echo "<h2>Supprimer echouée</h2>";
}
?>
