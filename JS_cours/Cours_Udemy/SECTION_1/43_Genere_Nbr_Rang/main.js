function randRandom(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min); // a partir de 5
}

console.log(rangRandom(5, 10));