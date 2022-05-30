<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="Style12.css" media="screen" type="text/css" />
    </head>
    <body background="PHOTO.JPG ">
       

        <div id="container">
            <!-- zone de connexion -->

            
            <form action="cro.php" method="POST">
                
               
                <h1><img src="logo-admin.PNG" width="60%" height="10%"></h1>
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom1" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="pwd1" required>

                <input type="submit" id='submit' value='LOGIN' >

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:Crimson'>Utilisateur ou mot de passe incorrect </p>";
                }
                ?> 
            <a href="AcceuillDegn.html" class="gg">Retour au page d'Acceuille</a>
            </form>
           
                
        
      
    </div>
    </body>
</html>