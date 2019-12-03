var num = 5;

function soustraction() {

	var num = 10;
	console.log(num);
}
maFonction();

// il considere var comme une nouvelle variable

var num = 5;


function soustraction() {

	var num = 10;
	console.log(num);

		function test() {
			var testvar = "test";
			console.log(testvar);
//ici nous n'avon pas acces a en dessous par contre en dessous a acces au parents
		}
		test()
}
soustraction();
console.log(num);