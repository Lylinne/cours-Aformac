
<?php
var_dump($_GET);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Defis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<form action="" method="get">
			<div id="forme">
				<h3 id="nous">Nous contacter</h3>
				<div id="disp">
					<div class="ecivil">
						<input type="text" id="name" name="user_name" required>
						<label for="name">Nom:</label>
	    				
						<input type="text" id="name" name="user_name" required>
	    				<label for="name">Prénom :</label>						
					</div>
					<div class="coord">
						<input type="text" name="number"  id="number">
						<label for="number">N° :</label>

						<input type="text" id="rue" name="adresse" required>
						<label for="rue">Type de voie :</label>	
					</div>
					<div>
						<input type="text" id="adresse" name="nom_rue" required>
						<label for="adresse">Nom de rue</label>

						<input type="text" id="postal" name="Postal" required>
						<label for="postal">CP :</label>

						<input type="text" id="Ville" name="ville" required>
						<label for="Ville">Villes :</label>
					</div>	
					<input class="envoyer" id = "envoie" type="submit" value="Envoyer"/>
				</div>		
			</div>				
		</form>	
	</div>
</body>
</html>