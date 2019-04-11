<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<a href="/starterphp/">retour</a>
<br />
<hr />

<?php
 //Exercice 1 Créer un tableau mois
$mois = [ 	"janvier",
			"février",
			"mars",
			"avril",
			"mai",
			"juin",
			"juillet",
			"aout",
			"septembre",
			"octobre",
			"novembre",
			"décembre"
		];

	//Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
	echo $mois[2];
	echo "<br/>";

	//Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.
	echo $mois[5];

	//Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
	echo "<br />avant. ";
	echo $mois[7];
	$mois[7] = "août";
	echo "<br />apres. ";
	echo $mois[7];

	//Exercice 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
	$departements = [
					"02" => "Aisne", 
					"59" =>	"Nord", 
					"60" => "Oise", 
					"62" => "Pas-de-Calais",
					"80" => "Somme"
				];

	//Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
	echo "<br /> ";
	echo $departements["59"];

	//Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
	$departements["51"] = "Marne";


	//Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

	for ($i=0; $i < count($mois) ; $i++) { 
		echo "<br />";
		echo $mois[$i];
	}
	//Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

	foreach ($departements as $departement) {
		echo $departement."<br />";
	}
	//Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.

	foreach ($departements as $numero => $departement) {
		echo "le numéro ".$numero." correspond à ".$departement."<br />";
	}
?>
</body>
</html>
