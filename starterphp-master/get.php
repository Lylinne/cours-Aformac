<!DOCTYPE html>
<html>
<head>
	<title>starters php</title>
</head>
<body>

<a href="/starterphp/">retour</a>
<a href="/starterphp/get.php?nom=Nemare&prenom=Jean">exo1</a>
<a href="/starterphp/get.php?nom=Nemare&prenom=Jean">exo2</a>
<a href="/starterphp/get.php?dateDebut=2/05/2016&dateFin=27/11/2016">exo3</a>
<a href="/starterphp/get.php?langage=PHP&serveur=LAMP">exo4</a>
<a href="/starterphp/get.php?semaine=12">exo5</a>
<a href="/starterphp/get.php?batiment=12&salle=101">exo6</a>

<br />
<hr />

<?php
//var_dump($_GET);


//exo 1
if(isset($_GET['nom']) && isset($_GET['prenom'])){
	echo $_GET['nom'].' '.$_GET['prenom'].' ';

}
//exo2
if (isset($_GET['age'])){
	echo $_GET['age']. ' ans';
}else{
	echo "<br /> age n'est pas défini <br />";
}
//exo3
if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
	echo $_GET['dateDebut'].' jusqu\'au '.$_GET['dateFin'].' ';

}

//exo4
if(isset($_GET['langage']) && isset($_GET['serveur'])){
	echo $_GET['langage'].' et '.$_GET['serveur'].' ';

}


//exo5
if(isset($_GET['semaine'])){
	echo $_GET['semaine'].' ';

}

//exo6
if(isset($_GET['batiment']) && isset($_GET['salle'])){
	echo $_GET['batiment'].' et '.$_GET['salle'].' ';

}

//bonus
if(isset($_GET)){
	if(isset($_GET['batiment'])){
	echo $_GET['batiment']. '  ';

}if(isset($_GET['salle'])){
	echo $_GET['salle'];

}

}

?>
</body>
</html>