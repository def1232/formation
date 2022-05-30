<?php
  $serveur="localhost";
  $user="root";
  $passwor='';
  $bdd="gestion_inscription";
  $db=mysql_connect($serveur,$user,$passwor,$bdd) or die("impossible de se connecte");
 mysql_select_db($bdd) or die("impossible de trouve le basse donnees");
  //recuperation des donnees
$a=$_POST["nom1"];
$b=$_POST["pwd1"];

$temp=FALSE;
$test=mysql_query("SELECT nom,mot_passe	 FROM asistende");
while ($ligne=mysql_fetch_row($test)) {
    if($ligne[0]==$a && $ligne[1]==$b) 
    {
        $temp=TRUE;
    }
}

if($temp==TRUE)
{
 header("location:menuInsistende.php");

}
else{
    echo "erreur de connexion";
}
?>


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
<form methode="POST">
	<TABLE align="center">
		<tr>
			<td align="rigth">Nom</td>
			<td><input type="text" name="nom1" ></td>
		</tr>

		<tr>
			<td align="rigth">mot de passe</td>
			<td><input type="password" name="pwd1"></td>
		</tr>
		<tr>
			<td></td>
			<td><input clas="btn" type="submit" name="submiter" value="Se connecte"></td>
		</tr>
	</TABLE>


</form>
</body>
</html>