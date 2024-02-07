<?php
session_start();
include('connect.php');
include('header.php');
$titre="votre rendez-vous";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Rendez-Vous</title>-->
    <link rel="stylesheet" href="styl.css">
</head >
<body class="bod">
        <nav class="nav1">
            <button><a href="consulren.php" >Votre rendez-vous</a></button>
            <button><a href="prendren.php">Nouvel rendez-vous</a></button>
        </nav>
        <h2>Votre rendez-vous</h2>
        <table>
            <tr>
                <th>Num</th>
                <th>nom</th>
                <th>Prenom</th>
                <th>Date rendez-vous </th>
                <th>Heure de rendez-vous</th>
                <th>Observation</th>
                <th colspan ="2">Actions</th>
            </tr>
        <?php
           $query=" select * from  rendezvous r  join  utilisateur u on  r.num_util=u.num_util";
            $result = mysqli_query($connect,$query);
            /*
            while($row= mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>{$row['num_util']}</td>";
                echo "<td>{$row['nom_util']}</td>";
                echo "<td>{$row['prenom_util']}</td>";
                echo "<td>{$row['date_rend']}</td>";
                echo "<td>{$row['heure_rend']}</td>";
                echo "<td>{$row['obser_rend']}</td>";
                #if (isset($_SESSION('num_util')) && $row['num_util']==$_SESSION['num_util']){
                echo "<td><a href='annulren.php?num_util=".$row['num_util']."'class='button'>Supprimer</a></td>";
               #}
                echo "</tr>";
            }
            */
            
            while($row= mysqli_fetch_assoc($result)){
                if (isset($_SESSION['num_util']) && $row['num_util']==$_SESSION['num_util']){ 
                echo "<tr>";
                echo "<td>{$row['num_util']}</td>";
                echo "<td>{$row['nom_util']}</td>";
                echo "<td>{$row['prenom_util']}</td>";
                echo "<td>{$row['date_rend']}</td>";
                echo "<td>{$row['heure_rend']}</td>";
                echo "<td>{$row['obser_rend']}</td>";
                //if (isset($_SESSION['num_util']) && $row['num_util']==$_SESSION['num_util']){
                echo "<td><a href='annulren.php?num_util=".$row['num_util']."'class='button'>Supprimer</a></td>";
               //}
                echo "</tr>";
            }
        }

            
        ?>
        </table>
        <script src="js/script.js"></script>
        
</body>
</html>