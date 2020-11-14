<?php 

$test = 'Salut ';

function direBonjour(string $prenom = '', string $nom = '') : string {		

	global $test;	
	//Permet d'afficher la valeur de façon globale, en dehors de la fonction

	$result = $test .$prenom. ' ' .$nom. '! Comment ça va?<br />'; 		//plus clair

	return $result;
}

