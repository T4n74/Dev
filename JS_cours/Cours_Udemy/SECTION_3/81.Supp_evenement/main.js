const lien = document.querySelector("a");

//lien.addEventLesterner("click", function() {
//	console.log("clic clic");
//})

function clic(){
	console.log("clic");
}

lien.addEventLesterner("click", clic);