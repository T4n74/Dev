const titre = document.body.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");

const lien = document.body.getEmementsByTagName("a")[0];

lien.setAttribute("href", "http://nomalacon.com");

console.log(lien.getAttribute("href"));