<?php 
session_start();

$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);
 
$a=$_POST['nom1'];
$b=$_POST['pwd1'];

$test=mysqli_query($connexion,"SELECT * FROM connection WHERE nom= '$a' && pass = '$b' ");
if (!$test) {
	die("Connection failed: " . mysqli_connect_error());
	} 

if(mysqli_num_rows($test) > 0){

	$row = mysqli_fetch_array($test);

	if($row['user_type'] == 'admin'){

	   $_SESSION['admin_name'] = $row['nom'];
	   header('location:admin.php');
	  
	}elseif($row['user_type'] == 'user'){

	   $_SESSION['user_name'] = $row['nom'];
	  header('location:user.php');
	 
	}
   


}
 else{
           header('Location: ffffrrjjj.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
;

?>
