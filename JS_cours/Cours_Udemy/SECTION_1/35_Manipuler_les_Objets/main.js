var chevalier = {
	"force": 15,
	"vitesse": 5,
	"faiblesse": ["mage", "ninja"],
};
// Mettre a jour
chevalier.force = 20;
// crée ou maj
chevalier.arme = "épée";
//Supp la propriete
delete chevalier.arme;
var requete = "force";

console.log(chevalier.force);