<?php

$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD); 

$test=mysqli_query($connexion,"SELECT * FROM connection");



session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:nn.php');
}
?>
