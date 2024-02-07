<!DOCTYPE html>
<html>
<head>
	<title>Modifier patient</title>
	<link rel="stylesheet" href="styl.css">
	<!--<style>
        form {
	width: 500px;
	border: 1px solid #93d6d0;
	padding: 5px;
	background: #d9dcdc;
	border-radius: 15px;
	opacity: .6;
    }
    input {
	display: block;
	border: 2px solid #93d6d0;
	width: 95%;
	padding: 10px;
	margin: 0px auto;
	border-radius: 5px;
}

input:hover{
	background: #dcf6f3;
}
label {
	color: #2d3837;
	font-size: 13px;
	padding: 10px;
}
button {
	float: right;
	
	padding: 9px 12px;
	color: #161616;
	border-radius: 5px;
	margin-right: 10px;
	border: 2px solid #93d6d0;
}
button:hover{
	opacity: .7;
    background-color: #dcf6f3;
}
body{
	background:url("image/cover.jpg");
	opacity: .9;
	background-size: cover;
	background-attachment: fixed;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	/*flex-direction: column;*/
	
}
h2{
    text-align:center;
}
    </style>-->
</head>
<body>
<?php
//include('element/headerad.php');
include('connect.php');

$query=" select * from  rendezvous r  join  utilisateur u on  r.num_util=u.num_util where num_rend=".$_GET['num_rend'];
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);

?>
     <form action="valmodifier.php" method="post">
     	<h2>Modifier patient</h2>
            <label>Num de rend</label><br>
            <input type="text" name="num_rend" value="<?php echo $row['num_rend']?>" readonly><br>

            <label>Nom de patient</label><br>
            <input type="text" name="nom_util" value="<?php echo $row['nom_util']?>"><br>
      
            <label>Prénom de patient</label><br>
            <input type="text" name="prenom_util" value="<?php echo $row['prenom_util']?>"><br>
    
            <label>Telephone de patient</label><br>
            <input type="text" name="tel_util" value="<?php echo $row['tel_util']?>"><br>
       
            <label>Email de patient</label> <br>
            <input type="text" name="email_util" value="<?php echo $row['email_util']?>" ><br>

			<label>Date de rend</label><br>
            <input type="date" name="date_rend" value="<?php echo $row['date_rend']?>"><br>
       
            <label>Heure de rend</label> <br>
            <input type="time" name="heure_rend" value="<?php echo $row['heure_rend']?>" ><br>

            <button type="submit">Valider</button>
			<a href="listren.php">Annuler</a>
            <!--<button type="reset">Annuler</button>-->
     </form>
</body>
</html>