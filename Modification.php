<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">

<?php
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);


$a=$_POST["b"];
$d=$_POST["c"];
$e=$_POST["d"];
$f=$_POST["e"];
$g=$_POST["f"];
$ch1=$_POST["g"];
$o=$_POST["h"];
$l=$_POST["i"];
$r=$_POST["j"];
$m=$_POST["k"];
$N=$_POST["l"];
$P=$_POST["m"];
$Q=$_POST["n"];
$QQ=$_POST["o"];
$QA=$_POST["p"];
$QW=$_POST["q"];
$QR=$_POST["r"];
$AA=$_POST["s"];

$QRs=$_POST["v"];
$QRt=$_POST["w"];
$QRy=$_POST["x"];
$QRc=$_POST["y"];
$QRh=$_POST["z"];
$BAR=$_POST["aa"];
$cal=$_POST["bb"];

$QRx=$_POST["t"];
$QRe=$_POST["u"];




$temp=FALSE;

$query="SELECT Numero_f_Filiere, Nom_F_Filiere,Niveau_Filiere FROM  filiere where Nom_F_Filiere='$QRx' and Niveau_Filiere='$QRe' ";
$result = mysqli_query($connexion,$query);
while($ligne=mysqli_fetch_row($result)) 
{
    	$b=$ligne[0];
    	$ba=$ligne[1];
    	$baa=$ligne[2];


    

$test=mysqli_query($connexion,"SELECT Numero_condidat FROM condidat");
while ($ligne=mysql_fetch_row($test)) {
    if($ligne[0]==$num) 
    {
        $temp=TRUE;
    }
}

if($temp==TRUE)

{

$sql=mysql_query("UPDATE condidat
SET 
Nom_et_condidat=$a,
Date_Naiss_condidat=$d,
Lieu_Naiss_condidat=$e,
Adresse_et_condidat=$f,
Telephone_et_condidat=$g,

Adresse_email_condidat=$ch1,
Type_Bac_condidat=$o,
Specialite_condidat=$l,
Annee_obtention_condidat=$r,
Pays_obtention_condidat=$m,

satut_professionnel_condidat=$N,
Finance_condidat=$P,
Niveau_etude_condidat=$Q,
Numero_et_condidat=$QQ,
Serie_filiere_condidat=$QA,

Etablissement_condidat=$QW,
Annee_condidat=$QR,
Mention_condidat=$AA,
Diplome_condidat=$QRs,
Releve_Note_condidat=$QRt,

carte_identite_condidat=$QRy,
photo_condidat=$QRc,
lettre_motivation_condidat=$QRh,
CV_condidat=$BAR,
Atestation_condidat=$cal,
Nom_F_Filiere=$ba,
Niveau_Filiere=$baa
WHERE Adresse_email_condidat='$ch1' 



");


}

else{

 echo "<table  width=100%>
    <tr> <td>  Cette E-mail ".$ch1." ne pas disponible !!!!! Veuillez saisir une autre</td> 
</tr>"; 
    
}

}


echo "<br>";
echo "<br>";
?>

		
	</form>

</body>
</html>