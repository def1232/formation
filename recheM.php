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