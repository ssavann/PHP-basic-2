<?php 
session_start();		//on démarre la session

$_SESSION['id'] = 8;	//on affecte '8' à ma session

//pour détruire une session, méthode simple


$_SESSION[];	//on vient vider le tableau de session



//on viet vider les cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

//on détruit la session
session_destroy();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>





	
</body>
</html>