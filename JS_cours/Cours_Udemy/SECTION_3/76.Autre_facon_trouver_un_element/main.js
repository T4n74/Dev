const titre = document.body.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");
const lien = document.body.getEmementsByTagName("a")[0];

const titre = document.querySelector(".para"); //il r'envoie le 1 er qu'il trouve

const titre = document.querySelectorAll(".para"); 

console.log(titre);