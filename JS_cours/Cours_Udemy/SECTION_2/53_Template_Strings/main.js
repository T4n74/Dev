const perso = {
	nom: "chouchou",
	force: 20,
	arme "fatal"
};

// const texte = perso.nom + " a une force de " + perso.force + " et une arme " + perso.arme + ".";
const texte = '${perso.nom} aune force de ${perso.force} et une arme ${perso.arme}.';

console.log(texte);