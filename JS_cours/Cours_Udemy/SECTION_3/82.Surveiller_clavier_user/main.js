const lien = document.querySelector("a");

//lien.addEventLesterner("click", function() {
//	console.log("clic clic");
//})

function clic(){
	console.log("clic");
	lien.removeEventListener("click", clic);
}

lien.addEventLesterner("click", clic);



addEventLesterner("keypress", function(event){
	console.log(event.key);
})