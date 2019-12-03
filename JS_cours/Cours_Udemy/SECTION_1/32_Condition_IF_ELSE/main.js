Function esTuFort(force) {
	if(force >= 15){
		return "Tu es trés Fort";
	}
	else if (force >= 10){
		return "Tu es fort";
	}
	else { 
		return "Non"
	}
}

console.log(esTuFort(9));