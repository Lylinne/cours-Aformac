<!DOCTYPE html>
<html>
<head>
	<title>starters php</title>
</head>
<body>
<a href="/starterphp/">retour</a>
<br />
<hr />

<?php

/**
* ##Exercice 1
* Créer une variable et l'initialiser à 0.
* Tant que cette variable n'atteint pas 10, il faut :
* - l'afficher
* - l'incrementer
*/

	$uneVariable = 0 ;
	while ($uneVariable < 10) {
		echo $uneVariable . "<br />";
		$uneVariable++;
	}

/**
* ##Exercice 2
* Créer deux variables. Initialiser la première à 0 et la deuxième avec  un nombre compris en 1 et 100.
* Tant que la première variable n'est pas supérieur à 20 :
* - multiplier la première variable avec la deuxième
* - afficher le résultat
* - incrementer la première variable
*/

	$variable1 =0;
	$variable2 = 50;

	while ($variable1 <= 20) {
		echo $variable1 * $variable2. "<br />";
		$variable1++;
	}

/**
*	##Exercice 3
*	Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
*	Tant que la première variable n'est pas inférieur ou égale à 10 :
*	- multiplier la première variable avec la deuxième
*	- afficher le résultat
*	- décrémenter la première variable
*/

	$variable3 = 100;
	$variable4 = 50;

	while ($variable3 > 10) {
		$result = $variable3 * $variable4. "<br />";
		echo $result;
		$variable3--;
	}

/**
*	##Exercice 4
*	Créer une variable et l'initialiser à 1.
*	Tant que cette variable n'atteint pas 10, il faut :
*	- l'afficher
*	- l'incrementer de la moitié de sa valeur
*/
	$variable5 = 1;

	while ($variable5 < 10) {
		echo $variable5 . "<br />";
		$variable5 +=  ($variable5 / 2);
	}

/**
*	##Exercice 5
*	En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.
*/

	for ($i=1; $i <= 15; $i++) { 
		echo "On y arrive presque <br />";
	}
/**
*	##Exercice 6
*	En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
*/

for ($i=20; $i >= 0 ; $i--) { 
	echo "C'est presque bon <br />";
}

/**
*	##Exercice 7
*	En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.
*/
for ($i=1; $i <= 100 ; $i+=15 ) { 
	echo "On tient le bon bout <br />";
}

/**
*	##Exercice 8
*	En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**
*/ 
for ($i=200; $i >= 0 ; $i-=12) { 
	echo "Enfin !!!! <br />";
}


?>
</body>
</html>