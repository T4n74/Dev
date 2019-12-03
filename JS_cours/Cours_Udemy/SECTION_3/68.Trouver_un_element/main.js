//const titre = document.body.getEmementsByTagName("h1");

const titre = document.body.getEmementById("titre"); // ce qui va donner les element plus precisement

const texte = document.body.getEmementsByTagName("p");

const autre = document.body.getEmementsByTagName("li"); // comme il n'y en a pas il r'envoie un array vide

console.log(texte);
//tout ce qu'il va trouver il va le presentais sous forme de tableau