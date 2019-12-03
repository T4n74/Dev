var arr = [1, 2, 3, 4, 5];
								//function anyme qui fonctionne seulement a lendroit crée & non rappellable
var arrPlusUn = arr.map(function(nombre){
	return nombre + 1; // Programation orienté function
		//ce qui va faire s'arreter automatiquement arriver a la fin 
});  

console.log(arrPlusUn);