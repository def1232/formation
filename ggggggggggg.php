<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="" method="POST"  enctype="multipart/form-data">
			<table>
				<thead>
					<tr>
						<th>Diplome_condidat</th>
						<th>Releve_Note_condidat</th>
						<th>carte_identite_condidat</th>
						<th>photo_condidat</th>
						<th>lettre_motivation_condidat</th>
						<th>CV_condidat</th>
						<th>Atestation_condidat</th>
					</tr>
				</thead>
				<?php

               $server="localhost";
                $user="root";
                 $password='';
              $BD="gestion_inscription";
               $connexion=mysqli_connect($server,$user,$password,$BD);

               
               $query="SELECT Diplome_condidat,Releve_Note_condidat,carte_identite_condidat,photo_condidat,lettre_motivation_condidat,CV_condidat,Atestation_condidat from condidat";
               $queryh=mysqli_query($connexion,$query);
               while ($ligne=mysqli_fetch_array( $queryh)) {
               	?>
                 <tr>
                 	<td><?php echo '<img src="data:Diplome_condidat; base64 ,'.base64_encode($ligne ['Diplome_condidat']).'"  alt="Image" style="width:100px ; height:100px;"> ';?></td>
                 </tr>

                 <?php



               
               }


				?>
			</table>
		
	</form>
	</center>
	

</body>
</html>