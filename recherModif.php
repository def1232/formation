<!DOCTYPE html>
<html>
<head>
	<title>asistende</title>
	<style>
		body{
			box-shadow: 1px 6px 17px grey;
			margin-right: 35%;
			margin-left: 35%;
			margin-top: 20%;
			padding-top: 10px;
			padding-bottom: 10px; 
		}
		.btn{
			width: 100%;
		}
	</style>
</head>
<body>
<form method="POST" action="rechercher.php">
		<TABLE align="center">
		<tr>
			<td align="rigth">E-mail:</td>
			<td><input type="text" name="numero"></td>
		</tr>
			<td></td>
			<td><input clas="btn" type="submit" name="submiter" value="Envoiye"></td>
		</tr>
	</TABLE>

	<center>
    <button><a href="menu.html" >retourne au menu</a></button>




  
</center>
</form>
</body>
</html>







<?php 
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);



$num=$_POST["g"];

$temp=FALSE;
$test=mysqli_query($connexion,"SELECT Adresse_email_condidat FROM condidat");
while ($ligne=mysqli_fetch_row($test)) {
    if($ligne[6]==$num) 
    {
        $temp=TRUE;
    }
}

if($temp==TRUE)

{
header("location:FormulaireModification.html");
} 

else{
    echo "<Cette Compte ".$num."  n'existe pas !!!!! Veuillez saisir une autre"; 
 
}
      ?>