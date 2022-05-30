<?php
// connect to the database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $name     = 'gestion_de_support';


    $db = mysqli_connect($host, $username, $password,$name);
    if (!$db) {
        echo "error";
    }

     /* $sql2 = "CREATE EVENT pola1 ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL '$asma1' MINUTE ON COMPLETION PRESERVE DO
      DELETE FROM `Cours2` WHERE CodeC = '$c'";*/

if (isset($_POST['save'])) { 

    $c = $_POST['cc'];
    if($c>0){
        header("location:up.php?erreur");
    }
    
    $asma = $_POST['date'];
    $asma1 = $_POST['date2'];
    $asma2 = $_POST['sem'];
    $cd= $_POST['cm'];
    $file_name = $_FILES['myfile']['name'];
    $file_type = $_FILES['myfile']['type'];
    $file_size = $_FILES['myfile']['size'];
    $file = $_FILES['myfile']['tmp_name'];
    
    $destination = 'folder/'.$file_name;

   if (move_uploaded_file($file, $destination)) {
      $sql = "INSERT INTO `Cours`(CodeC,nomC,Date_Depot,Date_Exp,CodeS,CodeM) VALUES('$c','$file_name','$asma','$asma1','$asma2','$cd')";
     // $sql0 = "INSERT INTO `Cours2`(CodeC2,nomC2,Date_Depot2,Date_Exp2,CodeS2,CodeM2) VALUES('$c','$file_name','$asma','$asma1','$asma2','$cd')";
        if (mysqli_query($db, $sql)) {
            
                   header('Location:cours.php');       
        }     
         else 
        {
            echo "Failed to upload file.";
        }
    }
    

}
?>