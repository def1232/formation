<!DOCTYPE html>
<html>
<head>
	<title>asistende</title>
</head>
<body>

	<center><h4>Votre rechercher</h4></center>
	

<?php 
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);



$num=$_POST["numero"];

$temp=FALSE;
$test=mysqli_query($connexion,"SELECT Numero_condidat FROM condidat");
while ($ligne=mysqli_fetch_row($test)) {
    if($ligne[0]==$num) 
    {
        $temp=TRUE;
    }
}

if($temp==TRUE)

{
$act=mysqli_query($connexion,"SELECT * FROM condidat WHERE Numero_condidat='$num'");


echo "<center>";
echo "<table border=\"2\" width=60% heidth=30%>

<tr>
<td>Numero_condidat</td><td>Nom_et_condidat</td><td>Date_Naiss_condidat</td><td>Lieu_Naiss_condidat</td><td>  Adresse_et_condidat</td><td>Telephone_et_condidat</td><td>Adresse_email_condidat</td><td>Type_Bac_condidat</td><td>Specialite_condidat</td><td>Annee_obtention_condidat</td><td>Pays_obtention_condidat</td><td>satut_professionnel_condidat</td><td>Finance_condidat</td><td>Niveau_etude_condidat</td><td>Numero_et_condidat</td><td>Serie_filiere_condidat</td><td>Etablissement_condidat</td><td>Annee_condidat</td><td>Mention_condidat</td><td>Diplome_condidat</td><td>Releve_Note_condidat</td><td>carte_identite_condidat</td><td>photo_condidat</td><td>lettre_motivation_condidat</td><td> CV_condidat</td><td>Atestation_condidat</td><td>Nom filiere</td> 
</tr> ";
while($ligne=mysqli_fetch_row($act)){

	 echo "<tr>";
   echo "<td> $ligne[0] </td>";
   echo "<td> $ligne[1] </td>";
   echo "<td> $ligne[2] </td>";
   echo "<td> $ligne[3] </td>";
   echo "<td> $ligne[4] </td>";
   echo "<td> $ligne[5] </td>";
   echo "<td> $ligne[6] </td>";
  echo "<td> $ligne[7] </td>";
  echo "<td> $ligne[8] </td>";
  echo "<td> $ligne[9] </td>";
  echo "<td> $ligne[10] </td>";
echo "<td> $ligne[11] </td>";
echo "<td> $ligne[12] </td>";
echo "<td> $ligne[13] </td>";
echo "<td> $ligne[14] </td>";
echo "<td> $ligne[15] </td>";
echo "<td> $ligne[16] </td>";
echo "<td> $ligne[17] </td>";
echo "<td> $ligne[18] </td>";
echo "<td> $ligne[19] </td>";
echo "<td> $ligne[20] </td>";
echo "<td> $ligne[21] </td>";
echo "<td> $ligne[22] </td>";
echo "<td> $ligne[23] </td>";
echo "<td> $ligne[24] </td>";
echo "<td> $ligne[25] </td>";
echo "<td> $ligne[26] </td>";
 echo "</tr>";
} 
echo "</table>";
} 

else{
    echo "<La numero ".$num." de  condidat n'existe pas !!!!! Veuillez saisir une autre"; 
 
}
      ?>
      <br>     
<CENTER>
<button><a href="user.php" >Retour</a></button>

</CENTER>
</body>
</html>