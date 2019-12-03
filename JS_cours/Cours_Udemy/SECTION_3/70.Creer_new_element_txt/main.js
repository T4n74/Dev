const titre = document.body.getEmementById("titre"); 
const texte = 
const texte = document.body.getEmementsByTagName("p");

const nouveauTexte = document.createTextNode("Helle c'est moi!");

document.body.appendChild(nouveauTexte); //qui va s'ajouter a la fin

document.body.replaceChild(nouveauTexte, texte[1]);  // remplacer le nouveauTexte par text[1]
