const titre = document.body.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");

console.log(text[1]);

document.body.insertBefore(texte[1], titre);

console.log(texte[1]);

document.body.appendChild(titre);

document.body.removeChild(titre);