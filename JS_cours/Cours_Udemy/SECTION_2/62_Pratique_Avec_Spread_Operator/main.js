const liste = ["quickQuick", "choupette", "cochon","niffleur","Chopper"];

const [ami1, ami2, ...chiens] = liste ;
console.log(chiens);
// cela va faire un tableau avec les noms des chiens 