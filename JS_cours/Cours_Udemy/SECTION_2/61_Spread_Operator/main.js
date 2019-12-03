const listeAmis = ["Quick", "Laurie", "cochon"];
const listeFamille =["Alban", "Mimi", "Sybille"]

const liste = [...listeAmis, ...listeFamille];
//... sa ecrit tous ce qui ce trouve dans chaque liste

const copieListe = [...liste];
copieListe.push("vero");

console.log(copieListe);

//vero ne sera pas mentionner grace aus ... devant liste 