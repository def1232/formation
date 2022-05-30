<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="feuilleStyle.css">
    </head>
    <body>
        <header>
            <table border="0" width="100%">
             <tr>
                 <td>
                     <img src="logo.png" alt="Logo" width="250px" height="100px">
                 </td>
                 <td>
                     <h1>UN BUS _ UN CAMPUS | Université de Djibouti</h1>
                 </td>
                 <td>
                     <img src="image.jpeg" alt="Logo" width="200px" height="100px">
                 </td>
             </tr>
         </table>
         </header>
         <nav>
            <div class="menu">
                <ul>
                    <li class="nav-accueil">
                        <a href="Accueil.html" title="Page d'accueil">ACCUEIL</a>
                    </li>
                    <li class="nav-gerant">
                        <a href="ConnexionGerant.html" title="Connectez-vous au tant que gérant">ESPACE GERANT</a>
                    </li>
                    <li class="nav-assistant">
                        <a href="ConnexionAssistant.html" title="Connectez-vous au tant qu'assistant">ESPACE ASSISTANT</a>
                    </li>
                    <li class="nav-etudiant">
                        <a href="FormulaireEtudiant.html" title="Remplissez le formulaire d'inscription">ESPACE ETUDIANT</a>
                    </li>
                    <li class="nav-conducteur">
                        <a href="FormulaireConducteur.html" title="Remplissez le formulaire d'inscription">ESPACE CONDUCTEUR</a>
                    </li>
                </ul>
            </div>
         </nav>
        <article>
            <?php
                // CONNEXION 
		           $server = "localhost";
		           $user = "root";
		           $password = "";
		           $dbname = "GestionDeTransportDesEtudiants";
	  
		           $MED=mysqli_connect($server,$user,$password,$dbname);

                // RECUPERATION
                    $NumCon=$_POST['numero'];
                // UTILISATION DES REQUETE SQL
                $requete=mysqli_query($MED,"SELECT * FROM CONDUCTEUR WHERE Num_Conducteur=$NumCon");
            ?>
            <section class="gerant">
                <div class="menuB">
                    <button><a href="ConnexionGerant.html" title="Deconnectez-vous">DECONNEXION</a></button>
                </div>
                <h2>MODIFICATION DES DONNEES D'UN CONDUCTEUR</h2>
                <div class="orange">
                    <p>
                        Les informations du conducteur que vous voulez le modifier sont ci-dessous, une fois que vous avez modifier que
                        les informations a modifier. Veuillez cliquer sur le bouton modifier. 
                    </p>
                    <center>
                        <form method="POST" action="ModifieConducteur.php">
                        <table border="0" cellpadding=15px>
                        <?php
                           while ($ligne=mysqli_fetch_row($requete)) {  
                        ?>
                        <tr>
                            <td>Numéro du conducteur : </td>
                            <td><input type="number" name="numCon" value=<?php $NumC=$ligne[0]; echo $NumC;?> required></td>
                       </tr>
                    <tr>
                        <td>Prénom du conducteur : </td>
                        <td><input type="text" name="prenomCon" value=<?php $PrenomC=$ligne[1]; echo "$PrenomC";?> required></td>
                    </tr>
                    <tr>
                        <td>Nom du conducteur : </td>
                        <td><input type="text" name="nomCon" value=<?php $NomC=$ligne[2]; echo "$NomC";?> required></td>
                    </tr>
                    <tr>
                        <td>Téléphone du conducteur : </td>
                        <td><input type="number" name="telCon" value=<?php $TelC=$ligne[3]; echo "$TelC";?> required></td>
                    </tr>
                    <tr>
                        <td>Age du conducteur : </td>
                        <td><input type="number" name="ageCon" value=<?php $AgeC=$ligne[4]; echo "$AgeC";?> required></td>
                    </tr>
                    <?php
                       }
                    ?>
                </table><br>
                <input type="submit" name="modifier" value="MODIFIER">
            </form>
                    </center>
                </div>
            </section>
        </article>
        <footer>
            <p>Copyright 2022 - Tout réproduction est interdit</p>
        </footer>
    </body>
</html>