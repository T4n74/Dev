const titre = document.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");
const lien = document.body.getEmementsByTagName("a")[0];

const texteArray = Array.from(texte);
//.map va chercher chaque element = a paragraphe innerHTML est remplacé par hahaha ...
texteArray.map(paragraphe => paragraphe.innerHTHML = "Hahahahaha je t'ai hacké !")

console.log(texteArray);

// sa peut servir quand par exemple sur un site e-commerce pour mettre tout les prix a 1€