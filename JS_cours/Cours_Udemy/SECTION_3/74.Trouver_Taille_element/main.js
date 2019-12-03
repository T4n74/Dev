const titre = document.body.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");

const lien = document.body.getEmementsByTagName("a")[0];

console.log(titre.offesetHeight, titre.offesetWidth);

console.log(titre.clientHeight, titre.clientWidth);