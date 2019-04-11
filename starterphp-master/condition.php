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
*	##Exercice 1
*	Créer une variable **age** et l'initialiser avec une valeur.
*	Si l'age est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.
*/
	$age = 100;
	if($age >= 18){
		echo "vous êtes majeur <br />";
	}else{
		echo "vous êtes mineur <br />";
	}

/**
*##Exercice 2
*	Créer une variable **IsEasy** de type booléan et l'initialiser avec une valeur.
*	Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.
*	**Bonus :** L'écrire de deux manières différentes.
*/
	$isEasy = true;
	if($isEasy){ //$isEasy == true
		echo "C'est facile!! <br />";
	}else{
		echo "C'est difficile !!! <br />";
	} 
	//bonus
	echo ($isEasy) ? 'C\'est facile!! <br />' : 'C\'est difficile !!! <br />';
	// (condition) ? true : false ;




/**
*	##Exercice 3
*	Créer deux variables **age** et **genre**. La variable **genre** peut prendre comme valeur :
*	- Homme
*	- Femme
*
*	En fonction de l'âge et du genre afficher la phrase correspondante :
*	- **Vous êtes un homme et vous êtes majeur**
*	- **Vous êtes un homme et vous êtes mineur**
*	- **Vous êtes une femme et vous êtes majeur**
*	- **Vous êtes une femme et vous êtes mineur**
*	
*	Gérer tous les cas.
*/

	$age = "2";
	$genre = "homme";

	if($genre == "homme"){
		echo "Vous êtes un homme et ";
	} else{
		echo "Vous êtes une femme et ";
	}
	if($age >= 18){
		echo "vous êtes majeur <br />";
	}else{
		echo "vous êtes mineur <br />";
	}

	if($genre == "homme" && $age >= 18){
		echo "Vous êtes un homme et vous êtes majeur <br />";
	}elseif($genre == "homme" && $age < 18){
		echo "Vous êtes une homme et vous êtes mineur <br />";
	}elseif($genre == "femme" && $age >= 18){
		echo "Vous êtes une femme et vous êtes majeure <br />";
	}elseif($genre == "femme" && $age < 18){
		echo "Vous êtes une femme et vous êtes mineure <br />";
	}else{
		echo "merci de choisir entre \"homme\" ou \"femme\" ";
	}

/**
*	##Exercice 4
*	L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
*	Créer une variable **magnitude**. Selon la valeur de **magnitude**, afficher la phrase correspondante.
*/

	$magnitude = 0;


switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo " Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo " Séisme capable de tout détruire sur une très vaste zone";
        break;
    default:
       echo $magnitude." ne fait pas partie de l'échelle de Richter";
}
echo '<br />';

/**
*##Exercice 5
*Traduire ce code avec des if et des else :
*
*
*   <?php
*    echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
*   ?>
*/

	if ($maVariable != 'Homme'){
		echo 'C\'est une développeuse !!!';
	}else{
		echo 'C\'est un développeur !!!';
	}


/**
*	##Exercice 6
*	Traduire ce code avec des if et des else :
*
*
*	<?php
*		echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
*   ?>
*/

		if ($monAge >= 18){
			echo 'Tu es majeur';
		}else{
			echo 'Tu n\'es pas majeur';
		}


/**
*	##Exercice 7
*	Traduire ce code avec des if et des else :
*
*
*   <?php
*     echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
*   ?>
*/

		if ($maVariable == false){
			echo 'c\'est pas bon !!!';
		}else{
			echo 'c\'est ok !!';
		}



/**
*##Exercice 8
*Traduire ce code avec des if et des else :
*
*
*   <?php
*     echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
*   ?>
*/


		if ($maVariable){
			echo 'c\'est ok !!';
		}else{
			echo 'c\'est pas bon !!!';
		}

?>
</body>
</html>