// Code JavaScript ici

// Afficher un message dans la console du navigateur (F12 au clavier)
console.log("Coucou");

// creer une variable
var num = 1;
// affiche la variable
console.log(num);

var chiffre;

console.log(chiffre);
// Undefined car il n'y a pas de valeur attribuer a la variable chiffre

chiffre = 22;
console.log(chiffre + num);

//les calcules
console.log(11 * 256456456643);

// les priorités de calcule * / 
console.log(1 / (2 + 2) * 5);

//division avoir le reste s'avoir si c'est paire ou impaire
console.log(10 % 3);

//incrémentation
var numero = 0;

numero += 1;
// OU numero++;

console.log(numero);

//assignement composé

var numero = 5;

numero *= 22 + 5 * (4 - 3);

console.log(numero);

// chaîne de caractere
var texte = " Hello";
var autreTexte = 'Bonjour je m\'appelle'; 
// le plus utilisé  mais pose soucis avec m'appelle par exemple

console.log("texte");
console.log("autreTexte");


// allez a la ligne
var test = " Hello Coeur \nje t\'aime";
console.log("test");

// tabulation
var test1 = " Hello Coeur \tje t\'aime";
console.log("test1");

//pour que un \ s'affiche il faut en mettre 2

var test2 = " Hello Coeur \\je t\'aime";
console.log("test2");


// Concaténer des chaîne de  
var bonjour = "Salut";

var nom ="Alban";

var espace = " ";

console.log(bonjour + " " + nom);
// OU  
var bonjour = "Salut";
var nom ="Alban";

bonjour += " " + nom;

console.log(bonjour);

// Généré une phrase
var nom = "Alban";
var age = "39";

var resultat = "bonjour " + nom + " tu as " + "age" + " ans!";
console.log(resultat);


// trouvé la Taille  d'une chaîne de caractere
var surNom = "Totoro";

console.log(surNom[surNom.length - 3]);

// pour trouver la derniere lettre sa ne fonctionne pas



// les tableaux

var nom1 = "Alban";
var age1 = "39";

var stats = ["attaque", "défense"];

var array = [nom1, age1, stats];

// modifier les variables precedentes
array[0] = "Totoro";
array[1] = 50;
array[2][1] = "Puissance";

console.log(array[2]);

// supp ou ajouter des données dans array
var arr = [1, 2, 3];

//ajouter 4 a la suite
arr.push(4);

// supp la derniere entré
arr.pop();
console.log(arr);


// pour conserver la valeur qui va etre supp 
var arr = [1, 2, 3];

var pop = arr.pop();

arr.push(pop);

console.log(arr);
console.log(pop);

//OU
var arr = [1, 2, 3];

var shift = arr.shift();

console.log(arr);
console.log(shift);

// trouver les initiales
var prenom = "Thaeronia";
var nom = "Clergeot";
var initiales = prenom[0] + nom[0];

var resultat = [];
// ou resultat.push(prenom, nom, initiales);

resultat.push(prenom);
resultat.push(nom);
resultat.push(initiales);

console.log(resultat);