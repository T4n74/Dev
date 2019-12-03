const texte = document.querySelector("textarea");
const button = document.querySelector("button");

texte.addEventListener("keyup", function(){   //le probleme c'est que si on reste appuyer keydown reste enclenché
	button.disabled = texte.value.length > 20 ? true : false;
})
