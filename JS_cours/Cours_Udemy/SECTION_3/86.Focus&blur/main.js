const input = document.querySelector("input");

input.addEventListener("focus", function(){
	input.style.background = "#C0FFEE";
//blur pour que quand tu clic hors du champs il redevient blanc
input.addEventListener("blur", function(){
	input.style.background = "white";
});