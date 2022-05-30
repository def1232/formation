<?php 
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);




if(isset($_GET['Numero_condidat'])){
  $Numero_condidat=$_GET['Numero_condidat'];
  $delet=mysqli_query($connexion,"DELETE * FROM condidat,filiere WHERE Numero_condidat='$Numero_condidat' and  filiere.Numero_f_Filiere=condidat.Numero_f_Filiere ");

 while($ligne=mysqli_fetch_row($affiche)){
 $a=$ligne['0'];
  $b=$ligne['1'] ;
  $c=$ligne['2'] ;
  $d=$ligne['3'] ;
  $e=$ligne['4'] ;
  $f=$ligne['5'] ;
 $g=$ligne['6'] ;
  $h=$ligne['7'] ;
  $i=$ligne['8'] ;
  $j=$ligne['9'] ;
  $k=$ligne['10'] ;
  $l=$ligne['11'];
   $m=$ligne['12'] ;
 $n=$ligne['13'] ;
  $o=$ligne['14'];
   $p=$ligne['15'] ;
  $q=$ligne['16'] ;
  $r=$ligne['17'] ;
   $s=$ligne['18'] ;





 require('fpdf.php');
 $pdf=new FPDF(orientation:P',unit:'mm',size:'A5);
 $pdf->AddPage();
 $pdf->Image(file:'logo-unive.jfif',x:10, y:5 , w:130 , h:20);
 $pdf->Ln(hc:10);
 $pdf->SetFont(Family:'Arial',style:'B' , size:16);


 $pdf->Cell(w:8,h:10,txt:'Formulaire Condidat',border:'TB',ln:1 , align:'C');

 $pdf->Ln(h:5);

 $pdf->SetFont(Family:'Arial',style:'' , size:10 );

 $h=7;

 $retrait= "    ";

 $pdf->Write($h,txt: $retrait."Num:".$a."\n");
 $pdf->Write($h,txt: $retrait."Nom complet:".$b."\n");
 $pdf->Write($h,txt: $retrait."Date de naissance: ". $c. "A" .  $d . "\n");

 $pdf->Write($h,txt: $retrait."Adresse:".$e."\n");
 $pdf->Write($h,txt: $retrait."Tel:".$f."\n");
 $pdf->Write($h,txt: $retrait."Email: ". $g."\n");

  $pdf->Write($h,txt: $retrait."Bac condidat:".$h."\n");
 $pdf->Write($h,txt: $retrait." Specialite:".$i."\n");
 $pdf->Write($h,txt: $retrait."Annee obtention: ". $j."\n");


 $pdf->Write($h,txt: $retrait."Pays obtention:".$k."\n");
 $pdf->Write($h,txt: $retrait."satut professionnel:".$l."\n");
 $pdf->Write($h,txt: $retrait."Finance_condidat: ". $m."\n");



 $pdf->Write($h,txt: $retrait."Niveau etude :".$n."\n");
 $pdf->Write($h,txt: $retrait."Numero condidat:".$o."\n");
 $pdf->Write($h,txt: $retrait."Serie filiere: ". $p."\n");



 $pdf->Write($h,txt: $retrait."Etablissement:".$q."\n");
 $pdf->Write($h,txt: $retrait."Annee:".$r."\n");
 $pdf->Write($h,txt: $retrait."Mention: ". $s."\n");


$pdf->Output(dest:'',name:'',isUTF8:true);




}
}

?>