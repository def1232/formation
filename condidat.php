<!DOCTYPE html>
<html>
<head>
	<title>
		Inscription
		
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylehamida1.css">
	<link rel="stylesheet" type="text/css" href="stylehamida.css">
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

       <nav>

		
          
             
           
			<ul>
                
				<li>
					<a href="AcceuillDegn.html">Acceuille</a>
				</li>
				<li>
					<a href="Formation.html">Formation</a>
				</li>
				<li class="menu-inscrips">
					<a href="#">Interface Etudiant</a>
					<ul class="soubenu"> 
						<li>
							<a href="Inscription.html">Inscription</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="Guide.html">Guide</a>
				</li>
			</ul>
			
		
	</nav>
     <div class="formulaire">
     	<form method="POST" action=" Traiter.php">
     		
     		<h2>
     			Formulaire d'inscription 
     		</h2>
     		<div class="form1">
     			<label for="Nom"> Nom complet <span class="star">*</span></label> <br>
     			<input type="text" name="b"  required="" class="input" placeholder="Votre nom"><br><br>

               <label for="date">Date de naissance: <span class="star">*</span></label><br>
			<input type="Date" name="c"   placeholder="Votre date de naissance" class="input" required=""><br><br>

     			<label for="lieu">Lieu de Naissance:<span class="star">*</span></label><br>
			   <input type="text" name="d"  maxlength="30" placeholder="votre Lieu de naissance" class="input" required=""><br><br>


			   <label for="Adresse">Adresse:<span class="star">*</span></label><br>
			<input type="text" name="e" id="Adresse" maxlength="30" placeholder=" votre Adresse" class="input" required=""><br><br>

			  <label for="tel">Telephone:<span class="star">*</span></label><br>
			<input type="number" name="f" id="tel" maxlength="30" placeholder=" numero de Telephone" class="input" required=""><br><br>



     			<label for="email">Adresse Email:<span class="star">*</span></label><br>
			<input type="email" name="g" id="email" maxlength="30" placeholder="votre Email" class="input" required=""><br><br>

           
			<label for="type">Type Bac:</label>
			<div class="select-style">
			<select name="h">
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
		<input type="text" name="i" id="Specialite" maxlength="30" placeholder=" votre Specialite" class="input" required="text"  title="champ obligatoire"><br><br>

		<label for="Annee">Annee d'obtention:<span class="star">*</span></label><br>
    	<input type="number" name="j" id="Annee" maxlength="30" class="input" required=""><br><br>

    	 <label for="pays">Pays d'obtention:<span class="star">*</span></label><br>
    	<input type="text" name="k" id="Pays" maxlength="30" class="input"><br><br>

    	<p>obligatoire si le condidat a deja ete a l'universite de djibouti</p>
     	<label for="number">Numero d'etudiant:<span class="star">*</span></label><br>
    	<input type="number" name="l" id="number" maxlength="30" class="input" ><br><br>
         <label for="finance">Financement:</label>
         <div class="select-style">
         <select name="m">
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
     	 <select name="n">
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
	 					<input type="text" name="o" class="h3" id="niveau" class="input">
	 				
	 				</td>
	 				
	 			</tr>
	 			<tr>
	 				<th class="h5">
	 					Série/Filiére
	 				</th>
                    <td>
	 					<input type="text" name="p" class="h3" id="serie" class="input">
	 				</td>
	 				
	 			
	 			</tr>
	 				<tr>
	 					<th class="h5">
	 					Etablissement
	 				</th>
	 				<td>
	 				<input type="text" name="q" class="h3" id="Etablissement" class="inputbasic2">

	 				</td>
	 				
	 				
	 				</tr>
	 				<tr>
	 				<th class="h5">
	 					Année
	 				</th>
	 				<td>
	 					<input type="number" name="r" class="h3" id="AnneN" class="inputbasic2">
	 				</td>
	 				
	 				
	 				</tr>
	 				<tr>
	 					<th >
	 				Mention
	 				</th>
	 				<td>
	 					<input type="text" name="s" class="h3" id="mention" class="inputbasic2">
	 				</td>
	 			
	 				
	 				</tr>
	 		</table>
	 	   
	 			
	 		<h3>Les formations diplomantes</h3>



	 		<label>Diplôme ou formation à laquelle vous postulez:</label>
	 		<div class="select-style">
	 		<select name="t">
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
	 		<select name="u">

                <option>Indefini(e) </option>
	 			<option>Lience 1 </option>
	 			<option>Lience 2</option>
	 			<option>Lience 3 </option>
	 			<option>Master 1 </option>
	 			<option>Master 2 </option>
	 		</select></div><br><br>

            <h5>Pièces à joindre obligatoirement à votre dossier de candidature (tout dossier incomplet sera rejeté)</h5>
	 		 <label class="mah">Diplome Certifie</label>
	 		 <input type="file" name="v" class="h3" id="diplome" class="input"   accept="image/*,.pdf"><br><br>
	 		 	<label for="relevs">relevés de note</label>
	 		 	<input type="file" name="w" class="h3" id="releve" class="input" accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Carte Nationale </label>
	 		 	<input type="file" name="x" class="h3" id="Carte" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Photo d'identité</label>
	 		 	<input type="file" name="y" class="h3" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">CV détaillé</label>
	 		 	<input type="file" name="z" class="h3" id="CV" class="input" accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Lettre de Motivation</label>
	 		 	<input type="file" name="aa" class="h3" id="Lettre" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Attestation Scolarité</label>
	 		 	<input type="file" name="bb" class="h3" id="Attestation" class="input"  accept="image/*,.pdf"><br><br>

                <div class="button">
                <input type="Submit" name="envoi" value="Envoyer" id="envoi">
     		
                </div>
     		
     		</div>
     		  <?php
                if(isset($_GET['correcte'])){
                    $err = $_GET['correcte'];
                    if($err==1 || $err==2)
                        echo "<p style='color:Crimson'>Votre information est bien enregistre </p>";
                }
                ?> 
     		
     	</form>
     	
     </div>
<footer id="colophon" class="site-footer" style="background-color: #def2f1">

		      
                                                                <div id="footer-2" class="col-md-7 " >
                                    <div id="custom_html-10" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><style type="text/css">
.tftable {font-size:17px;color:#0396A0;width:100%;}
.tftable th {font-size:15px;background-color:#def2f1;text-align:top;}
.tftable tr {background-color:#0396A0; margin-top:0px; }
.tftable td {font-size:12px;border-width: 0.5px;padding: 8px;border-style: solid;border-color: #0396A0;}
.tftable tr:hover {background-color:#0396A0;}
</style>

<table class="tftable">
<tr><th><strong><center>Universit&eacute; de Djibouti <br />Campus de Balbala<br />Croisement RN2-RN5 | B.P : 1904 Djibouti<br /> T&eacute;l. : (+253)21315555  | M&eacute;l. : ud@univ.edu.dj <br><a href="connexion.html" class="connexion">Se connecte</a></center></strong></th></tr>
</table></div></div>                                </div>
								                    </div>
                </div>
			 <hr/>
           
            <div class="copyright-area">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="site-info" style="color: black" style="size: 20px" style="font-weight: bolder">
	                        Copyright © 2022, Université de Djibouti                      </div><!-- .site-info -->
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div>

        </div>
	</footer><!-- #colophon -->
</body>
</html>

