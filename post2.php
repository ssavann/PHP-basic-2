<?php 
if(!empty( $_POST )){

	extract( $_POST );	
	//va créer automatiquement des variables pour mettre les données dans 'search'

	echo $search;
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>




<form action="" method="post">
	<input type="text" name="search" placeholder="Rechercher...">
	<input type="submit"  value="Rechercher">


</form>

	
</body>
</html>