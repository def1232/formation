<?php 
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);




if(isset($_GET['Numero_condidat'])){
  $Numero_condidat=$_GET['Numero_condidat'];
  $delet=mysqli_query($connexion,"DELETE FROM condidat WHERE Numero_condidat='$Numero_condidat'");
}





$select="SELECT * FROM condidat ";
$query=mysqli_query($connexion,$select);
?>




<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylehamida.css">
    <meta charset="UTF-8">
 <title>
 </title>
 <style type="text/css">
  table, td {
  border: 1px solid;
}
table{
  margin: 10px;
  padding: 0px;
  size: 20px;
  width: 50%;
  height: 30%;

}
table th{
  size: 500px;
  width: 400%;

}

table .id{
  width: 100%;
}

 </style>


</head>
<body> 


  <form method="POST" action="rechercher.php" >
    <TABLE align="center">
    <tr>
      <td><input type="text" name="nom" placeholder="Rechercher"></td>
       <td><input clas="btn" type="submit" name="submiter" value="Recherche"></td>
    </tr>
  </TABLE>
</form>
<form>
  <center>
     </br> </br> </br> </br> </br> </br> </br> </br> </br>
    


    </br>
     </br>
<table border="1" class="id" width="100" bgcolor="">
  <tr>
<th class="ll" width="100" bgcolor="#04AA6D" style="size: 25px">Numero condidat</td>
<th class="ll" bgcolor="#04AA6D">Nom condidat</td>
<th class="ll" bgcolor="#04AA6D">Date Naissance condidat</td>
<th class="ll" bgcolor="#04AA6D">Lieu Naissance condidat</td>
<th class="ll" bgcolor="#04AA6D">Adresse condidat</td>
<th class="ll" bgcolor="#04AA6D">Telephone condidat</td>
<th bgcolor="#04AA6D">Adresse Email</th>
<th bgcolor="#04AA6D">Type Bac</th>
<th bgcolor="#04AA6D">Specialite</th>
<th bgcolor="#04AA6D">Annee obtention</th>
<th bgcolor="#04AA6D">Pays obtention </th>
<th bgcolor="#04AA6D">Satut professionnel </th>
<th bgcolor="#04AA6D">Finance condidat</th>
<th bgcolor="#04AA6D">Niveau etude condidat</th>
<th bgcolor="#04AA6D">Numero condidat</th>
<th bgcolor="#04AA6D">Serie filiere condidat</th>
<th bgcolor="#04AA6D">Etablissement condidat</th>
<th bgcolor="#04AA6D">Annee condidat</th>
<th bgcolor="#04AA6D">Mention condidat</th>
<th bgcolor="#04AA6D">Diplome condidat</th>
<th bgcolor="#04AA6D">Releve Note condidat</th>
<th bgcolor="#04AA6D">carte identite condidat</th>
<th bgcolor="#04AA6D">photo condidat</th>
<th bgcolor="#04AA6D">lettre motivation condidat</th>
<th bgcolor="#04AA6D"> CV condidat</th>
<th bgcolor="#04AA6D">Atestation condidat</th>
<th bgcolor="#04AA6D">Nom filiere</th>
<th bgcolor="#04AA6D">Niveau </th>
<th bgcolor="#04AA6D">Avis </th>

</tr> 
<?php
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD); 
//$test=mysqli_query($connexion,"SELECT * FROM connection");


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:nn.php');}

$affiche=mysqli_query($connexion,"SELECT Numero_condidat,Nom_et_condidat,Date_Naiss_condidat, Lieu_Naiss_condidat,Adresse_et_condidat,Telephone_et_condidat,Adresse_email_condidat, Type_Bac_condidat,  Specialite_condidat,Annee_obtention_condidat,Pays_obtention_condidat,satut_professionnel_condidat , Finance_condidat,Niveau_etude_condidat, Numero_et_condidat,Serie_filiere_condidat,Etablissement_condidat, Annee_condidat,Mention_condidat,Diplome_condidat,Releve_Note_condidat,  carte_identite_condidat,photo_condidat, lettre_motivation_condidat,CV_condidat,Atestation_condidat,Nom_F_Filiere,Niveau_Filiere from condidat, filiere
 where filiere.Numero_f_Filiere=condidat.Numero_f_Filiere");
while($ligne=mysqli_fetch_row($affiche)){
  ?>
<tr>
   <td><?php echo $ligne['0']?></td>
 <td><?php echo $ligne['1'] ?></td>
 <td><?php echo $ligne['2'] ?></td>
 <td><?php echo $ligne['3'] ?></td>
 <td><?php echo $ligne['4'] ?></td>
 <td><?php echo $ligne['5'] ?></td>
 <td><?php echo $ligne['6'] ?></td>
 <td><?php echo $ligne['7'] ?></td>
 <td><?php echo $ligne['8'] ?></td>
 <td><?php echo $ligne['9'] ?></td>
 <td><?php echo $ligne['10'] ?></td>
 <td><?php echo $ligne['11'] ?></td>
 <td><?php echo $ligne['12'] ?></td>
 <td><?php echo $ligne['13'] ?></td>
 <td><?php echo $ligne['14'] ?></td>
 <td><?php echo $ligne['15'] ?></td>
 <td><?php echo $ligne['16'] ?></td>
 <td><?php echo $ligne['17'] ?></td>
 <td><?php echo $ligne['18'] ?></td>
 <td><?php echo $ligne['19'] ?></td>
 <td><?php echo $ligne['20'] ?></td>
 <td><?php echo $ligne['21'] ?></td>
 <td><?php echo $ligne['22'] ?></td>
 <td><?php echo $ligne['23'] ?></td>
 <td><?php echo $ligne['24'] ?></td>
 <td><?php echo $ligne['25'] ?></td>
 <td><?php echo $ligne['26'] ?></td>
 <td><?php echo $ligne['27'] ?></td>
<td>
  <label>favorable</label>
  <input type="checkbox" name="dd">
  <label>defavorable</label>
  <input type="checkbox" name="dd">
</td>
</tr>

 <?php
}

?>

</table>

    <button><a href="ffffrrjjj.php" >retourne au Connection</a></button>

  
</center>

</form>


</body>
</html>

 
