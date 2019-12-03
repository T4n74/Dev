var arme = "Baguette";
console.log(arme);

var arme = "dague";
console.log(arme);
// sa marche mais ce n'est pas propre trop permissif


console.log(arme);
var arme = "épee";
//il voit que var arme existe mais ne voit pas la valeur attribuer


//Block VS Function Scope
var arme = "Masse"; 
function choixArme() {
	
	console.log(arme);
}
console.log(force);

// ou
var arme = "Chat";
if (arme == "Chat") {
	
	var force = 15; //let force = 15;  sa ne marcherai pas 
}
choixArme();

// Cont et let fonctionne de la meme maniére 
console.log(arme);
const arme = "Chat";