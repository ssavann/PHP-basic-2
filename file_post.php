<?php 

if(isset( $_FILES['avatar']) && $_FILES['avatar']['error'] == 0){
	//echo 'Le fichier a été uploader';

	$erreur = [];

	//pour télécharger que des fichiers 'png'. Au format 'jpg' ça sera une erreur
	if ($_FILES['avatar']['type'] != 'image/png') {
		$erreur['type'] = 'Le format n\'est pas correct';
	}

	if ($_FILES['avatar']['size'] >	10048576) {	//si supérieur à 10Mo
		$erreur['size'] = 'Le fichier dépasse 10Mo';
	}


	if (!$erreur) {
		if(move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/' .$_FILES['avatar']['name'] )){

			$validation = 'Le fichier a été uploadé!';
		} else {
			$erreur['move'] = 'Il y a eu une erreur lors de l\'envoi';
		}
	}

}


 ?>


<?php 
/*
La variable globale $_FILES va contenir toutes les informations sur le fichier téléchargé. Son contenu est détaillé dans notre exemple ci-dessous. Notez que l'on suppose que le nom de la variable du fichier téléchargé est userfile, tel que défini dans le formulaire ci-dessus, mais peut être n'importe quel nom.

$_FILES['userfile']['name']
Le nom original du fichier, tel que sur la machine du client web.

$_FILES['userfile']['type']
Le type MIME du fichier, si le navigateur a fourni cette information. Par exemple, cela pourra être "image/gif". Ce type mime n'est cependant pas vérifié du côté de PHP et, donc, ne prend pas sa valeur pour se synchroniser.

$_FILES['userfile']['size']
La taille, en octets, du fichier téléchargé.

$_FILES['userfile']['tmp_name']
Le nom temporaire du fichier qui sera chargé sur la machine serveur.

$_FILES['userfile']['error']
Le code d'erreur associé au téléchargement de fichier.

-------- PHP retourne un code d'erreur -------

UPLOAD_ERR_OK
Valeur : 0. Aucune erreur, le téléchargement est correct.

UPLOAD_ERR_INI_SIZE
Valeur : 1. La taille du fichier téléchargé excède la valeur de upload_max_filesize, configurée dans le php.ini.

UPLOAD_ERR_FORM_SIZE
Valeur : 2. La taille du fichier téléchargé excède la valeur de MAX_FILE_SIZE, qui a été spécifiée dans le formulaire HTML.

UPLOAD_ERR_PARTIAL
Valeur : 3. Le fichier n'a été que partiellement téléchargé.

UPLOAD_ERR_NO_FILE
Valeur : 4. Aucun fichier n'a été téléchargé.

UPLOAD_ERR_NO_TMP_DIR
Valeur : 6. Un dossier temporaire est manquant. Introduit en PHP 5.0.3.

UPLOAD_ERR_CANT_WRITE
Valeur : 7. Échec de l'écriture du fichier sur le disque. Introduit en PHP 5.1.0.

UPLOAD_ERR_EXTENSION
Valeur : 8. Une extension PHP a arrêté l'envoi de fichier. PHP ne propose aucun moyen de déterminer quelle extension est en cause. L'examen du phpinfo() peut aider. Introduit en PHP 5.2.0.

*/


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php if (isset( $erreur['type'])) :  ?>
<b><?= $erreur['type'] ?></b>
<?php endif; ?>
<?php if (isset( $erreur['size'])) :  ?>
<b><?= $erreur['size'] ?></b>
<?php endif; ?>

<!-- pour télécharger un fichier sur le serveur -->
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="avatar">
	<input type="submit"  value="Uploader">


</form>



	
</body>
</html>