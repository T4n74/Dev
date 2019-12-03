

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

// pour ajouter avant 
var arr = [1, 2, 3];

arr.unshift(0);

console.log(arr);

 
//OU supp le 1 er
var arr = [1, 2, 3];

var shift = arr.shift();

console.log(arr);
console.log(shift);