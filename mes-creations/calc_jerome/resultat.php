<?php

function addition($nombre1,$nombre2)
{
	$resultat = $nombre1 + $nombre2;
	return $resultat;
}

function soustraction($nombre1,$nombre2)
{
	$resultat = $nombre1 - $nombre2;
	return $resultat;
}

function multiplication($nombre1,$nombre2)
{
	$resultat = $nombre1 * $nombre2;
	return$resultat;
}

function division($nombre1,$nombre2)
{
	$resultat = round($nombre1 / $nombre2)
	$reste = $nombre1 % $nombre2;
	return $resultat;
	return $reste;
}


if(!empty($_POST['nombre1'])AND !empty($_POST['nombre2']) AND !empty($_POST['choix'])) //exite et non vide
{
	$nombre1 = htmlspecialchars($_POST['nombre1']);
	$nombre2 = htmlspecialchars($_POST['nombre2']);
	$choix = htmlspecialchars($_POST['choix']);
	
	if($choix == "addition")
	{
		addition($nombre1,$nombre2);
		echo"le résultat est ",$resultat;
	}
	
	elseif($choix == "soustraction")
	{
		soustraction($nombre1,$nombre2);
		echo"le résultat est ",$resultat;
	}
	
	elseif($choix == "multiplication")
	{
		multiplication($nombre1,$nombre2);
		echo"le résultat est ",$resultat;
	}
	
	elseif($choix == "division")
	{
		division($nombre1,$nombre2);
		echo"le résultat est ",$resultat," et il reste est ",$reste;
	}
	
	else
		echo"veuillez completer tous les champs";
}
?>
