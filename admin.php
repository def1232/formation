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
    <meta charset="UTF-8">
 <title>
 </title>
 <style type="text/css">
 	 <style type="text/css">
  table{
  border-collapse: collapse;
  width: 300px;
  margin-bottom: 20px;
}
th,td{
  border: 1px solid black;
  padding: 10px;
}
td,th{
  border: 2px solid black;
  padding: 10px;
  table-layout: fixed;
}
td{
  font-size: 15px;
  font-weight: bolder;
}

tr td{
 width: 100%;

}
tr td{
	font-size: 20px;
}
table{
  width: 500px;
}
td{
  vertical-align: top;
}
body{
  background-color: rgba(0, 0, 0, 0.09);
  padding: 10px;
  margin: 10px;
  position: relative;
  left: 10px;
}
.bb{
	font-size: 30px;
	font-weight: bolder;
	position: 20px;
	margin-bottom: 20px;
	color: black;
	background-color: grey;
	text-decoration: none;

}
input .rechercher{
  margin-left: 15%;
     padding:15px;
     border-radius: 10px;
     width: 30%;
      -webkit-transition: width 0.15s ease-in-out;
      transition: width 0.15s ease-in-out;

}
.rechercher{
  font-size: 25px;
  color: black;
  width: 30%;
  height: 50px;
border:1px solid black;
margin-top: 20px;
position: relative;
left: 50px;
}
#hamida{
  font-size: 27px;
  font-weight: bolder;
  font-size: 25px;
  color: black;
  height: 50px;
  margin-top: 20px;
  position: relative;
left: 50px;


}
 </style>

 </style>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 


  <form method="POST" action="rechercher.php">
    <center>
    <input type="text" placeholder="Rechercher" class="rechercher">
       <input clas="btn" type="submit" name="submiter" value="Rechercher" class="recherche" id="hamida">
</form>
<form>
  <center>
     </br> </br> </br> </br> </br> </br> </br> </br> </br>
    


    </br>
     </br>
<table border="3" width="30">
  <tr>
<td>Numero candidat</td>
<td>Nom candidat</td>
<td>Adresse email </td>
<td>Nom filiere</td>
<td>Niveau filiere</td>
<td>avis</td>
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

$affiche=mysqli_query($connexion,"SELECT Numero_condidat,Nom_et_condidat,Adresse_email_condidat,Nom_F_Filiere,Niveau_Filiere from condidat, filiere
 where filiere.Numero_f_Filiere=condidat.Numero_f_Filiere");
 while($ligne=mysqli_fetch_row($affiche)){
  ?>
<tr>
   <td><?php echo $ligne['0']?></td>
 <td><?php echo $ligne['1'] ?></td>
 <td><?php echo $ligne['2'] ?></td>
 <td><?php echo $ligne['3'] ?></td>
 <td><?php echo $ligne['4'] ?></td>
 
 <td>
 	
 		 <label for="avis">Favorable</label>
    <input type="checkbox" name="dd" required="text" size="15"> 
    <label for="avis">Defavorable</label>
    <input type="checkbox" name="dd" required="text" size="15">
 		
 	
 

</td>
</tr>

 <?php
}

?>

</table><br><br><br>

    <button><a href="ffffrrjjj.php"  class="bb">Deconnexion</a></button>
      

  
</center>

</form>



</body>
</html>

 


 


