var chevalier = {
	"force": 15,
	"vitesse": 5,
	"faiblesse": ["mage", "ninja"]
};

console.log(chevalier);

var requete = "force";
// si on ne sais pas sur quoi va cliquez la personne on peut afficher ceci:
console.log(chevalier[requete]);

// pour qu'il affiche juste la force
console.log(chevalier.force);

// pour acceder a mage
console.log(chevalier.faiblesse[0]);