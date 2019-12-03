<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Envoie d'un  message par formulaire</title>
</head>

<body>

<?php
$retour = mail('miss.thaeronya@gmail.com', 'Envoie depuis la page contact', $_POST['message'], 'from : webmaster@monsite.fr');
if($retour) {
	echo '<p> Votre message a bien été envoyé. </p>';
}
?>
</body>
</html>