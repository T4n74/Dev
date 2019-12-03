// 1 . const par defaut
// 2 . let si besoin MAJ
// 3 . plus jamais de var

const arme = "pistolet";
arme = "lance";

const perso = {
	nom: "Alban totoro",
	force: 15,
	arme: "pistolet"
};

perso = {
	nom: "Alban totoro",
	force: 15,
	arme: "chat"
}; // sa ne se met pas a jour car c'est une constante ceci ne change pas 

//per contre les elements dans une constante peuvent etre modifier 
// au lieu du const arme = "pistolet";  il faut let arme = "pistolet";
perso.nom = " Doudou";

if (arme == épée) {
	const force = 15; // une valeur ou on sais qu'elle ne changera pas
	let arme = "lance";
	console.log(arme);

}

console.log(arme);