<?php 

function direBonjour(string $prenom = '', string $nom = '') : string {		
//transforme un chiffre en chaîne de caractère avec ' : string'
//function direBonjour(int $prenom = '', int $nom = ''){		//si on veut forcer la valeur en int
//function direBonjour(float $prenom = '', float $nom = ''){	//Pour sécuriser les valeurs en float

	

	$result = 'Bonjour '.$prenom. ' ' .$nom. '! Comment ça va?<br />'; 		//plus clair

	return $result;
}

