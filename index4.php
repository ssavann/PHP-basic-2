<?php 
//declare(strict_types=1);		//pour rendre php plus strict avec quelques règles
require_once 'functions4.php';


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 

$texte = direBonjour('Mario', 'Lemieux');
echo $texte;

echo direBonjour(654646, 'Roy');			//transforme un chiffre en chaîne de caractère
											// Le fait de mettre 'strict' ça ne passe plus
?>	
	
</body>
</html>