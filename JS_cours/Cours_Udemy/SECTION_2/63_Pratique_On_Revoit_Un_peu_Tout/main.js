function plusUn(...args) {
//	console.log(args);
	const arr = [...args]; // tu remet tout ce que tu trouve dans args
	return arr.map(num => num + 1);
}
console.log(plusUn(1,2,3,4,5,6,22,10,1980))