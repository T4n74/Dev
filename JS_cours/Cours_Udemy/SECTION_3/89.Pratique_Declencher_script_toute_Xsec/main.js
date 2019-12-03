const titre = document.querySelector("h1");
let i = 3;

titre.addEventListener("click", function(){
	const compte = setInterval(function(){

	if (i > 0){
		titre.textContent = i;
	}
	else{
		titre.textContent = "Go !";
		clearInterval(compte);
	}
	i--;
}, 1000); //plus le nombre est bas plus ca va vite
})