//code modifier mais qui a la meme fonction
function randomize(arr) {
	

	for (var i = 0; i < arr.length; i++) {
		const random = Math.floor(Math.random() * arr.length);
		[arr[i], arr[random]] = [arr[random], arr[i]];
	}
	return arr;
}

console.log(randomize([1,2,3,4,5]));