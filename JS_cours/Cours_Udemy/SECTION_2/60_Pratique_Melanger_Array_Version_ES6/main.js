function randomize(arr) {
	let temp = 0;
	let random = 0;

	for (var i = 0; i < arr.length; i++) {
		random = Math.floor(Math.random() * arr.length);
		temp = arr[i];
		arr[i] = arr[random];
	}
	return arr;
}

console.log(randomize([1,2,3,4,5]));