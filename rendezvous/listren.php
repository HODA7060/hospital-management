<?php
 session_start();
 include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de rendez-vous</title>
    <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--->

    <style>
    header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;
    }
    header .logo {
        font-size: 25px;
    }
    header .logo span {
        color: #93d6d0;
    }
    header .menu a {
        position: relative;
        margin: 0 10px;
        text-decoration: 0;
        color: #999;
        transition: 0.5s;
    }
    header .menu a:before {
        position: absolute;
        top: -2px;
        content: "";
        width: 0;
        height: 2px;
        background-color: #93d6d0;
        transition: 0.5s;
    }
    header .menu a:hover:before {
        width: 100%;
    }
    header .menu a:hover {
        color: #000;
    }
    tr{
    border:1px solid #000;
    }
    td,th{
    padding: 5px;
    text-align: left;
    }
    th{
    color:#000;
    background-color:#bcf6f6;
    }
    table{
        width: 100%;
        border-collapse:collapse;
    }

    td a {
        float: right;
        padding: 5px 6px;
        color: #161616;
        border-radius: 5px;
        margin-right: 10px;
        border: 2px solid #93d6d0;
        text-decoration:none;
        font-size: 13px;
    }

    td a:hover{
        opacity: .7;
        background-color: #dcf6f3;
    }
    fieldset{
        margin: 5px;
    }
    fieldset legend{
        font-style: italic;
        font-family:sans-serif;
        font-size: 14px;
        font-weight: bold;
    }
    fieldset input{
        width: 300px;
        margin: 6px;
        border-radius:8px;
        padding: 5px;
    }
    fieldset button{
        padding: 5px;
        margin: 6px;
        border-radius:8px;
        color:#000;
        background-color:#bcf6f6;
    }
    </style>
</head>
<body>
    <header>
        <ul class="menu">
            <a href="listren.php">List de rendez-vous</a>
            <a href="quitteradmin.php">Se déconnecter</a>
        </ul>
    </header>
    <form action="#" method="POST">
        <fieldset>
            <legend>Rechercher</legend>
            <input required="required" type="text" name="valeur" placeholder="Saisir une valeur..">
            <button type="submit" class="btn">Rechercher</button>
       
    <table>
            <tr>
                <th>N° patient</th>
                <th>Nom</th>
                <th>Prenom </th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date rend</th>
                <th>Heure rend </th>
                <th>Observation</th>
                <th>N° rend</th>
                <th colspan ="3">Actions</th>
            </tr>
        <?php
            $query=" select * from  rendezvous r  join  utilisateur u on  r.num_util=u.num_util ";
            /*if(isset($_POST['valeur'])){
                $query = $query ." where nom_util like '%".$_POST['valeur']."%' or prenom_util like '%".$_POST['valeur']."%' or tel_util like '%".$_POST['valeur']."%' or email_util like '%".$_POST['valeur']."%' or date_rend like '%".$_POST['valeur']."%' or heure_rend like '%".$_POST['valeur']."%'";
                }
                $query=$query ." order by nom";*/
                $result = mysqli_query($connect,$query);
                while($row= mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>{$row['num_util']}</td>";
                    echo "<td>{$row['nom_util']}</td>";
                    echo "<td>{$row['prenom_util']}</td>";
                    echo "<td>{$row['tel_util']}</td>";
                    echo "<td>{$row['email_util']}</td>";
                    echo "<td>{$row['date_rend']}</td>";
                    echo "<td>{$row['heure_rend']}</td>";
                    echo "<td>{$row['obser_rend']}</td>";
                    //echo "<td>{$row['num_util']}</td>";
                    //echo "<td>{$row['nom_util']}</td>";
                    //echo "<td>{$row['prenom_util']}</td>";
                    //echo "<td>{$row['tel_util']}</td>";
                    //echo "<td>{$row['email_util']}</td>";
                    echo "<td>{$row['num_rend']}</td>";
                    //echo "<td>{$row['date_rend']}</td>";
                    //echo "<td>{$row['heure_rend']}</td>";
                    //echo "<td>{$row['obser_rend']}</td>";

                    echo "<td><a href='modifier.php?num_rend=".$row['num_rend']."'>Modifier</a></td>";
                    echo "<td><a href='supprimeruser.php?num_util=".$row['num_util']."'class='button'>Supprimer</a></td>";
                    echo "<td><a href='valider.php?num_util=".$row['num_util']."'class='button'>Valider</a></td>";
                    echo "</tr>";

                }
        ?>
        </table>
        </fieldset>
    </form> 
    
</body>
</html>