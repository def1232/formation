<!DOCTYPE html>
<html>
<head>
	<title>
		Inscription
		
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylehamida1.css">
</head>

<body>
     <div class="formulaire">
     	<form method="POST" action=" Traiter.php">
     		<h2>
     			Formulaire d'inscription 
     		</h2>
     		<div class="form1">
     			<label for="Nom"> Nom complet <span class="star">*</span></label> <br>
     			<input type="text" name="1" id="nom" required="" class="input" placeholder="Votre nom"><br><br>

               <label for="date">Date de naissance: <span class="star">*</span></label><br>
			<input type="Date" name="2" id="date"  placeholder="Votre date de naissance" class="input" required=""><br><br>

     			<label for="lieu">Lieu de Naissance:<span class="star">*</span></label><br>
			   <input type="text" name="3" id="lieu" maxlength="30" placeholder="votre Lieu de naissance" class="input" required=""><br><br>


			   <label for="Adresse">Adresse:<span class="star">*</span></label><br>
			<input type="text" name="4" id="Adresse" maxlength="30" placeholder=" votre Adresse" class="input" required=""><br><br>

			  <label for="tel">Telephone:<span class="star">*</span></label><br>
			<input type="number" name="5" id="tel" maxlength="30" placeholder=" numero de Telephone" class="input" required=""><br><br>



     			<label for="email">Adresse Email:<span class="star">*</span></label><br>
			<input type="email" name="6" id="email" maxlength="30" placeholder="votre Email" class="input" required=""><br><br>


			<label for="type">Type de Bac:<span class="star">*</span></label>
			<input type="checkbox" name="7" id="bac">Bac General
            <input type="checkbox" name="7" id="bac">Bac Professionnel
            <input type="checkbox" name="7" id="bac">Bac Technologique
            <input type="checkbox" name="7" id="bac">Bac Arabe  <br><br>

         
            <label for="Specialite">Specialite:<span class="star">*</span></label><br>
		<input type="text" name="8" id="Specialite" maxlength="30" placeholder=" votre Specialite" class="input" required=""><br><br>

		<label for="Annee">Annee d'obtention:<span class="star">*</span></label><br>
    	<input type="number" name="9" id="Annee" maxlength="30" class="input" required=""><br><br>

    	 <label for="pays">Pays d'obtention:<span class="star">*</span></label><br>
    	<input type="text" name="10" id="Pays" maxlength="30" class="input"><br><br>

    	<p>obligatoire si le condidat a deja ete a l'universite de djibouti</p>
     	<label for="number">Numero d'etudiant:<span class="star">*</span></label><br>
    	<input type="number" name="11" id="number" maxlength="30" class="input" required=""><br><br>
         <label for="finance">Financement:<span class="star">*</span></label>
    	<input type="checkbox" name="13" id="finance">Employer
     	<input type="checkbox" name="13" id="finance">Individuel
     	<br><br>
     	    <label for="Star">Statut professionnel:<span class="Star">*</span></label><br>
     	    <input type="checkbox" name="12" id="Statut" >Salarie
     		<input type="checkbox" name="12" id="Statut"><span class="Statut">Profession a preciser</span> <textarea></textarea><br><br>


     		<input type="checkbox" name="12" id="Statut" ><span class="Statut">Sans Emploi</span>
     		<input type="checkbox" name="12" id="Statut" ><span class="Statut">Autre (a preciser)</span><textarea></textarea>

     		<table border="5">
	 		     <h3>CURSUS SCOLAIRE:(A partir du baccalaureat)</h3>
	 			<tr>
	 				<th class="h5">
	 					Niveau d'étude
	 				</th>
	 				<td >
	 					<input type="text" name="14" class="h3" id="niveau" class="input">
	 				
	 				</td>
	 			</tr>
	 			<tr>
	 				<th class="h5">
	 					Série/Filiére
	 				</th>
                    <td>
	 					<input type="text" name="15" class="h3" id="serie" class="input">
	 				</td>
	 			
	 			</tr>
	 				<tr>
	 					<th class="h5">
	 					Etablissement
	 				</th>
	 				<td>
	 				<input type="text" name="16" class="h3" id="Etablissement" class="inputbasic2">

	 				</td>
	 				
	 				</tr>
	 				<tr>
	 				<th class="h5">
	 					Année
	 				</th>
	 				<td>
	 					<input type="number" name="17" class="h3" id="AnneN" class="inputbasic2">
	 				</td>
	 				
	 				</tr>
	 				<tr>
	 					<th >
	 				Mention
	 				</th>
	 				<td>
	 					<input type="text" name="18" class="h3" id="mention" class="inputbasic2">
	 				</td>
	 				
	 				</tr>
	 		</table>
	 	   
	 			
	 		<h3>Les formations diplomantes</h3>
	 		<h3>Lience et Masters de l'université de Djibouti</h3>
	 		<h3>Liences</h3>
	 		<h4>Faculté des Lettres Langue et Sciences Humaines</h4>

	 		<label for="lience">Mention:Lience Lettres Modernes<span class="Star"></span></label><br>
	 			<input type="checkbox" name="licence">L1
	 			<input type="checkbox" name="lience">L2
	 			<input type="checkbox" name="lience">L3<br><br>

	 			<label for="lience">Mention:Lience Anglais<span class="star"></span></label>
	 			<input type="checkbox" name="lience1">L1
	 			<input type="checkbox" name="lience1">L2
	 			<input type="checkbox" name="lience1">L3<br><br>

	 			<label for="lience">Mention:Master Gestion des Risques et des Catastrophes(GRC)<span class="Star"></span></label>

	 			<input type="checkbox" name="lience">M1
	 			<input type="checkbox" name="lience">M2<br><br>
	 			<h4>Faculter des Sciences</h4>
	
	 		 	<label for="lience">Mention:Lience Physique chimie</label>
	 		 	<input type="checkbox" name="lience">L3<br><br>

	 		 <h4>Institut Universitaire Technologique Tertiaire</h4>
	 		 	<label for="lience">Lience Appliquée Logistique et Transport(LALT)<span class="star"></span></label><br>
	 		 	<input type="checkbox" name="lience">L1
	 		 	<input type="checkbox" name="lience">L2
	 		 	<input type="checkbox" name="lience">L3<br><br>
	 		
	 		 	<label for="lience">Lience Appliquée comptabilité finance Administration(LACFA)<span class="Star"></span></label><br>
	 		 	<input type="checkbox" name="lience">L1
	 		 	<input type="checkbox" name="lience">L2
	 		 	<input type="checkbox" name="lience">L3<br><br>
	 		
	 		 	<label for="lience">Lience Appliquée Commerce International(LACI)<span class="star"></span></label><br>
	 		 	<input type="checkbox" name="lience">L1
	 		 	<input type="checkbox" name="lience">L2
	 		 	<input type="checkbox" name="lience">L3<br><br>
	 		 	<h3>Pieces Joindre</h3>
	 		 <label class="mah">Diplome Certifie</label>
	 		 <input type="file" name="file1" class="h3" id="diplome" class="input"   accept="image/*,.pdf"><br><br>
	 		 	<label for="relevs">relevés de note</label>
	 		 	<input type="file" name="file2" class="h3" id="releve" class="input" accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Carte Nationale </label>
	 		 	<input type="file" name="file3" class="h3" id="Carte" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Photo d'identité</label>
	 		 	<input type="file" name="file4" class="h3" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">CV détaillé</label>
	 		 	<input type="file" name="file5" class="h3" id="CV" class="input" accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Lettre de Motivation</label>
	 		 	<input type="file" name="file6" class="h3" id="Lettre" class="input"  accept="image/*,.pdf"><br><br>
	 		 	<label class="mah">Attestation Scolarité</label>
	 		 	<input type="file" name="file7" class="h3" id="Attestation" class="input"  accept="image/*,.pdf"><br><br>

                <div class="button">
                <input type="Submit" name="envoi" value="Envoyer" id="envoi">
     		
                </div>
     		
     		</div>
     	</form>
     	
     </div>

</body>
</html>