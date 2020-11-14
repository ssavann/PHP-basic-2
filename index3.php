<?php 
require_once 'functions3.php';


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

echo direBonjour('Gordie', 'Howe');			//on appelle la fonction 'direBonjour'

?>	
	
</body>
</html>