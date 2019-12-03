var name = "Alban";

var nameLength = name.Length;

var myString = 'Hello Doudou';

var xString = '22';

var xNumber = parseInt(xString);

console.log(name);

console.log(xNumber);

//commentaire ce qui suit sont des operators
/*
var x = 12;
var y = 22;
var result = x+y;

console.log(result);


//les Booleans vrai ou False 

var myBoolean = 'True';

console.log(myBoolean);

//operateur de comparaison
var x = 5;
var meBoolean = (x===5); /*strictement = 

//est ce que x est different de 5 = (x!==5)
console.log(meBoolean);

//autre exemple

var z = 5;
var s = 12;

var myBoolean = (z>3 && s<15); //si une des partie est fause alors le tout sera faux
 condition ou 
				var myBoolean = (z>3 || s<15);


console.log(myBoolean)*/

// récapitulatif
console.log("----------------------");
console.log(true && true); //= true
console.log(true && false);// = false
console.log(false && true); //= false
console.log(false && false); //= false

console.log("----------------------");

console.log(true || true); //= true
console.log(true || false); //= true
console.log(false || true); //= true
console.log(false || false); //= false
console.log("----------------------");

// donne moi l'inverse de quelque chose
console.log(!true); // = false
console.log(!false); // = true

// conditions
var speed = 70;

if (speed<80)
{
	console.log("tu roule a la bonne vitesse");
}
else if (spee < 100)
{
	console.log("Il faut que tu ralentisses un petit peu");
}
else
{
	console.log("Tu roules beaucoup trop vite, c'est dangereux!");
}

var favoriteColor = "blue";

switch(favoriteColor)
{
	case "blue":
		console.log("Wouah! Le bleu c'est trop beau");
		break;
	case "red":
		console.log("J'aimerais bien avoir une voiture rouge!");
		break;
	default:
		console.log("Je ne connais pas ta couleu!");
}

//les boucles

var number = 0;
do
{

}
while(number<3)
{
	console.log(number);
	number++;
}
/* trés utiliser
for(var number = 0; number < 5; number++) //(partie2; partie2;partie3)
 {
	code a executer
}
*/

//Fonction
/*
function name(parameter1; parameter2; etc....)
{
	Code a executer
	retun result;
}
*/
//scope
/*
function multiply(number1, number2, number3)
{
	var resultMultiply = number1*number2*number3;
	retun number1*number2*number3;
}

var a = 5;
var b = 6;

var result = multiply(a,b,a);

console.log(result);
*/

// tableau
var fruits = [ "pomme", "Banane", "cerise", "citron"];
/*
for(var i = 0; i < fruits.length i++)
{
	console.log(fruits[i]);
}
*/

fruits.punch("kiwi");

console.log(fruits);
// tableu suite
var myArray = [[0,1] , [5,7,8] , [12,18]];  // sa se compte de 0 1 2
console.log(myArray[2][1]);    // ce qui affiche le 18


//objet

var dog = {
	name: "chopper",
	color: "white",
	age: 3
	};

console.log(dog["age"]);

//fonction constructeurs 

function Dog(name, color,age)
{
	this.name = name;
	this.color = color;
	this.age = age;
	this.aboie = function()
	{
		console.log("Wouaf")
	}
}

var petitCaniche = new Dog("Choupette", "white", 4);

var grosPitbull = new Dog("Couicouic", "black", 2);

console.log(petitCaniche);
console.log(grosPitbull);

petitCaniche.aboie();










































