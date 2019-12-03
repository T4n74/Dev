
var nom1 = "Alban";
var age1 = "39";

var stats = ["attaque", "défense"];

var array = [nom1, age1, stats];

// modifier les variables precedentes
array[0] = "Totoro";
array[1] = 50;
array[2][1] = "Puissance";

console.log(array[2][1].length);