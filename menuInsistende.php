<?php 
$conn=mysqli_connect('localhost','root','','gestion_inscription') or die("impossible de se connecte");


$affiche=mysql_query("SELECT *  from condidat");
while ($ligne=mysql_fetch_row($affiche))
{
	$n=$ligne[0];
	$a=$ligne[1];
	$d=$ligne[2];
	$e=$ligne[3];
	$f=$ligne[4];
	$g=$ligne[5];
	$ch1=$ligne[6];
	$o=$ligne[7];
	$l=$ligne[8];
	$r=$ligne[9];
	$m=$ligne[10];
	$N=$ligne[11];
	$P=$ligne[12];
	$Q=$ligne[13];
	$QQ=$ligne[14];
	$QA=$ligne[15];
	$QW=$ligne[16];
	$QR=$ligne[17];
	$AA=$ligne[18];
	$QRx=$ligne[19];
	$QRe=$ligne[20];
	$QRs=$ligne[21];
	$QRt=$ligne[22];
	$QRy=$ligne[23];
	$QRc=$ligne[24];
	$QRh=$ligne[25];
	$BAR=$ligne[26];

	echo "$n,'$a','$d','$e','$f','$g','$ch1',$o,'$l',$r,'$m','$N','$P','$Q',$QQ,'$QA','$QW',$QR,'$AA','$QRx','$QRe','$QRs','$QRt','$QRy','$QRc','$QRh',$BAR <br>";

}

?>
<html>
<head>
    <meta charset="UTF-8">
 <title>
MENU GENERALE
 </title>
</head>
<body> 
    <center>
    <H1>
   MENU GENERALE
    </H1>
<table border="2" cellspacing=15 cellpadding=15 width="50%">
    <tr>
        <td>
            <form action="CHOIX_TABLE_AJOUT.html">
                <input type="submit" value="AJOUTER">
            </form>
        </td>
        <td>
            <form action="CHOIX_TABLE_SUPPRESSION.html">
            <input type="submit"   value="SUPPRIMER">
        </form>
        </td>
    </tr>
    <tr>
        <td>
            <form action="CHOIX_TABLE_RECHERCHE.html">
            <input type="submit"   value="RECHERCHER">
        </form>
        </td>
        <td>
            <form action="CHOIX_TABLE_MODIFIER.html">
            
            <input type="submit"   value="MODIFIER">
        </form>

        </td>
    </tr>
  
    <tr>
        <td>
  <form action="CHOIX_TABLE_AFFICHAGE.html">
<input type="submit" value="AFFICHAGE">  
</form>
</td>

</tr>

</table>

  
</center>
</form>
</body>
</html>