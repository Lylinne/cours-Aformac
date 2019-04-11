<?php
 
$mois = ["janvier",
		 "fevier",
		 "mars",
		 "avril",
		 "mai",
		 "juin",
		 "juillet",
		 "aout",
		 "septembre",
		 "octobre",
		 "novembre",
		 "decembre",
		];

echo $mois[2];
echo "<br/>";
echo $mois[5];
echo "<br/>avant";
echo $mois[7];
$mois[7] = "aoùt";
echo "<br/>après";
echo $mois[7];

$departements = ["02" => "Ainsi",
				 "59" => "Nord",
				 "60" => "Oise",
				 "62" => "Pas-de-Calais",
				 "80" => "Somme"]; 

echo "<br/>";
echo $departements["59"];
$departements["51"] = "Marne";

for($i = 0; $i < count($mois); $i++){
	echo "<br/>";
	echo $mois[$i];
}
?>