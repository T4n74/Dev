function randomizer(arr) {
	var temp = 0;
	var	random = 0;

	for ( var i = 0; i < arr.length; i++){
		random = Math.floor(Math.random() * arr.length); // Nmb aleatoire
		temp = arr[i];  // stocker la valeur i
		arr[i] = arr[random]; // je remplace par random
		arr [random] = temp; // ce qui echange la place des chiffre aleatoir
	}
	return arr;
}

console.log(randomizer([1, 2, 3, 4, 5]));