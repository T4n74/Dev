function niveau(arr) {
	var moyenne = (arr[0] + arr[1] + arr[2]) / arr.length; /* la taille ou cas ou si il y 
	a d'autre notes a ajouté */

	if (moyenne >= 15) {
		return "Tres bien ! " + moyenne;	//Pour afficher la moyenne
	}
	else if (moyenne >= 10) {
		return "Bien ! " + moyenne;
	}
	else{ 
		return "Convocation des parents ! " + moyenne;
	}

}	

console.log(niveau([12, 8, 16]));


