<!DOCTYPE html>
<html>
<head>
	<title>
		Inscription
		
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylehamida1.css">
    <link rel="stylesheet" type="text/css" href="stylehamida2.css">

	

</head>

<body>
	 <header class="main-head">
            <div>
            
            	
            	<div class="id10">
            		<div class="hamida">
            	<p >
            	<span class="sp">Republique de Djibouti</span><br>
             	Ministere de l'enseignement Superieur et de la <br>
             	<span class="sp">recherche</span><br>
             	<span class="spn">Université de Djibouti</span>
            	</p>
            	</div>
            	
                 <div>
                <img  class="id11"src="logo-unive.JFIF">
                 <a href="#" class="ff">Engagement|</a> <a href="#" class="dd">Equité|</a> <a href="#" class="kk">Qaulité</a>
                </div>

                <div >
            	<p class="hamida">

            	<span class="sp">جمهورية جيبوتي</span><br>
             	وزارة التعليم العالي و<br>
             	<span class="sp">بحث</span><br>
             	<span class="spn">جامعة جيبوتي</span>
            	</p>
            </div>
            	</div>
            

            </div>

       </header>

      


     <div class="formulaire">
     		<form method="POST" action="">
     		<h2>
     			Etat recapitulative
     		</h2>
     		<div class="form1">

<?php 

$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD); 



                // RECUPERATION
                  
                   $g=isset($_GET['g'])?$_GET['g']:0;
                // UTILISATION DES REQUETE SQL
                $requete="SELECT * FROM condidat WHERE Adresse_email_condidat='$g' ";
                $result=mysqli_query($connexion,$requete);

                           while($ligne=mysqli_fetch_row($result)) {  
                        ?>
     			<label for="Nom"> Nom complet <span class="star">*</span></label> <br>
     			<input type="text" name="b"  required="" class="input" placeholder="Votre nom" value=<?php $b=$ligne[1]; echo "$b";?> required ><br><br>
     			
     			

               <label for="date">Date de naissance: <span class="star">*</span></label><br>
			<input type="Date" name="c"   placeholder="Votre date de naissance" class="input" value=<?php $c=$ligne[2]; echo "$c";?> required ><br><br>
		

     			<label for="lieu">Lieu de Naissance:<span class="star">*</span></label><br>
			   <input type="text" name="d"  maxlength="30" placeholder="votre Lieu de naissance" class="input" value=<?php $d=$ligne[3]; echo "$d";?>required ><br><br>


			   <label for="Adresse">Adresse:<span class="star">*</span></label><br>
			<input type="text" name="e" id="Adresse" maxlength="30" placeholder=" votre Adresse" class="input" value=<?php $e=$ligne[4]; echo "$e";?>required ><br><br>

			  <label for="tel">Telephone:<span class="star">*</span></label><br>
			<input type="number" name="f" id="tel" maxlength="30" placeholder=" numero de Telephone" class="input" value=<?php $f=$ligne[5]; echo $f;?>required ><br><br>



     			<label for="email">Adresse Email:<span class="star">*</span></label><br>
			<input type="email" name="g" id="email" maxlength="30" placeholder="votre Email" class="input" value=<?php $g=$ligne[6]; echo "$g";?> required ><br><br>

           
			<label for="type">Type Bac:</label>
			<div class="select-style">
			<select name="h" value=<?php $h=$ligne[7]; echo "$h";?>>
				<option>Indefini(e)</option>
				<option>
					Bac genéral
				</option>
				<option>
					Bac professionelle
				</option>
				<option>
					Bac arabe
				</option>
				<option>
					Autre
				</option>
			</select> </div><br><br>

        

         
            <label for="Specialite">Specialite:<span class="star">*</span></label><br>
		<input type="text" name="i" id="Specialite" maxlength="30" placeholder=" votre Specialite" class="input" value=<?php $i=$ligne[8]; echo "$i";?> required="text"  title="champ obligatoire"><br><br>

		<label for="Annee">Annee d'obtention:<span class="star">*</span></label><br>
    	<input type="number" name="j" id="Annee" maxlength="30" class="input" value=<?php $j=$ligne[9]; echo "$j";?> required ><br><br>

    	 <label for="pays">Pays d'obtention:<span class="star">*</span></label><br>
    	<input type="text" name="k" id="Pays" maxlength="30" class="input" value=<?php $k=$ligne[10]; echo "$k";?>><br><br>

    	<p>obligatoire si le condidat a deja ete a l'universite de djibouti</p>
     	<label for="number">Numero d'etudiant:<span class="star">*</span></label><br>
    	<input type="number" name="l" id="number" maxlength="30" class="input" value=<?php $l=$ligne[11]; echo $l;?>><br><br>

         <label for="finance">Financement:</label>
         <div class="select-style">
         <select name="m" value=<?php $m=$ligne[12]; echo "$m";?>>
         	<option>
         		Employer
         	</option>
         	<option>
         		Individuel
         	</option>

         </select></div>
     	<br><br>
     	 <label>
     	 	Votre situation professionnelle actuelle:
     	 </label>
     	 <div class="select-style">
     	 <select name="n" value=<?php $n=$ligne[13]; echo "$n";?>>
     	 	<option>
     	 		 Salarie
     	 	</option>
     	 	<option>
     	 		Sans Emploi
     	 	</option>
     	 	<option>
     	 		Profession
     	 	</option>
     	 	<option>
     	 		Autre 
     	 	</option>
     	 </select></div>

     		<table border="5">
	 		     <h3>CURSUS SCOLAIRE:(A partir du baccalaureat)</h3>
	 			<tr>
	 				<th class="h5">
	 					Niveau d'étude
	 				</th>
	 				<td >
	 					<input type="text" name="o" class="h3" id="niveau" class="input" value=<?php $o=$ligne[14]; echo "$o";?>>
	 				
	 				</td>
	 				
	 			</tr>
	 			<tr>
	 				<th class="h5">
	 					Série/Filiére
	 				</th>
                    <td>
	 					<input type="text" name="p" class="h3" id="serie" class="input" value=<?php $p=$ligne[15]; echo "$p";?>>
	 				</td>
	 				
	 			
	 			</tr>
	 				<tr>
	 					<th class="h5">
	 					Etablissement
	 				</th>
	 				<td>
	 				<input type="text" name="q" class="h3" id="Etablissement" class="inputbasic2" value=<?php $q=$ligne[16]; echo "$q";?>>

	 				</td>
	 				
	 				
	 				</tr>
	 				<tr>
	 				<th class="h5">
	 					Année
	 				</th>
	 				<td>
	 					<input type="number" name="r" class="h3" id="AnneN" class="inputbasic2" value=<?php $r=$ligne[17]; echo "$r";?>>
	 				</td>
	 				
	 				
	 				</tr>
	 				<tr>
	 					<th >
	 				Mention
	 				</th>
	 				<td>
	 					<input type="text" name="s" class="h3" id="mention" class="inputbasic2" value=<?php $s=$ligne[18]; echo "$s";?>>
	 				</td>
	 			
	 				
	 				</tr>
	 		</table>
	 	   
	 			
	 		<h3>Les formations diplomantes</h3>



	 		<label>Diplôme ou formation à laquelle vous postulez:</label>
	 		<div class="select-style">
	 		<select name="t" value=<?php $t=$ligne[26]; echo $t;?>>
	 			<option>
	 				Indifini(e)
	 			</option>
	 			<option>
	 				Mention:Lience Lettres Modernes
	 			</option>
	 			<option>
	 				Mention:Lience Anglais
	 			</option>
	 			<option>
	 				Mention:Master Gestion des Risques et des Catastrophes(GRC)
	 			</option>
	 			<option>
	 				Mention:Lience Physique chimie
	 			</option>
	 			<option>
	 				Lience Appliquée Logistique et Transport(LALT)
	 			</option>
	 			<option>
	 				Lience Appliquée comptabilité finance Administration(LACFA)
	 			</option>
	 			<option>
	 				Lience Appliquée Commerce International(LACI)
	 			</option>
	 		</select> </div><br><br>

	 		<label>Niveau de diplôme auquel vous postulez:</label>
	 		<div class="select-style">
	 		<select name="u" value=<?php $u=$ligne[26]; echo $u;?>>

                <option>Indefini(e) </option>
	 			<option>Lience 1 </option>
	 			<option>Lience 2</option>
	 			<option>Lience 3 </option>
	 			<option>Master 1 </option>
	 			<option>Master 2 </option>
	 		</select></div><br><br>

         
                            <?php
                       }
                    ?>
     		
     		</div>
     	   <div class="directeur">
     	   	  <center>
     	   	  	
     	   	 <table border="1">
     	   		<tr>
     	   			<td>
     	   			<p class="pp">Le responsable de l'inscription </p>
     	       	<label>
     	   		Nom:
     	   	</label>
     	   	<input type="text" name="hh"><br><br>
     	   	<label>
     	   		Date de signature:<input type="date" name="1445"><br><br>
     	   	</label>
     	   	<h3>Cachet</h3> <br>
     	   	<h3>
     	   		Signature 
     	   	</h3>
     	   			</td>
     	   		</tr>
     	   	</table>
     	   	 </center>
     	   
     	   </div>
     	</form>
     	
     </div>
	
</body>
</html>

