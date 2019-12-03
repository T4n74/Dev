var chevalier = {
	"force": 15,
	"vitesse": 5,
	"faiblesse": ["mage", "ninja"],
	"compagnon": {
		"animal": "chien",
		"aide": "écuyer"
	}
};
var recette = {
	"recette1": {
		"ingredients": [],.
		"nom": "ma recette",
		"cuisson": 15
	},
	"recette2":{
		"ingredients": [],.
		"nom": "ma recette",
		"cuisson": 15
	}
}


chevalier.force = 20;
chevalier.arme = "épée";

delete chevalier.arme;
var requete = "force";

// S'avoir si il y a une des proprieté
console.log(chevalier.hasOwnProperty("force"));

//Acceder a Aide
console.log(chevalier.compagnon.aide);