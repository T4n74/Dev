const formulaire = document.querySelector("form");

formulaire.addEventListener("submit", function(event) {
	event.preventDefault();
	console.log("OK");
	formulaire.reset();
});