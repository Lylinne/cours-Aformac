<?php 

// Exercice 1
$uneVaraible = 0;
while ($uneVaraible < 10) {
	echo $uneVaraible."<br/>";
	$uneVaraible++;

	# code...
}
//Exercice 2
$premiereVaraible = 0;
$deuxiemeVariable = 50;

while ($premiereVaraible < 20) {
	# code...
	echo $premiereVaraible * $deuxiemeVariable. "<br/>";
	$premiereVaraible++;
}
//Exercice 3
$troisiemeV = 100;
$quatriemeV = 50;

while ($troisiemeV > 10) {
	$result = $troisiemeV * $quatriemeV."<br/>";
	echo $result;
	$troisiemeV--;
	# code...
}
//Exercice 4
$cinquiemeV = 1;

while ($cinquiemeV < 10) {
	echo $cinquiemeV."<br/>";
	$cinquiemeV += ($cinquiemeV / 2);
}
//Exercice 5
for ($i = 1; $i <= 15; $i++){
	echo "on y arrive presque <br/>";
}
//Exercice 6
for($i = 20; $i <= 0; $i--){
	echo "c'est presque bon <br/>";
}
//Exercice 7
for($i = 1; $i <= 100; $i += 15){
	echo "on tient le bon bout <br/>";
}

$age = 14;
$genre = "homme";

if($age >= 18){
	echo "vous ête un homme et ";
}
else{
	echo "vous êtes une femme et ";
}
if($age >= 18){
	echo "vous ête majeur";
}
else{
	echo "vous n'êtes pas majeur";
}





?>