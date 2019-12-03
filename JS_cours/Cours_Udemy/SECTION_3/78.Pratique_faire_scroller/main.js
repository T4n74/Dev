const titres = document.querySelectorAll("h1");

function goToTitre(titre) {
	const distance = titre.offsetTop;
	console.log(titre.offsetTop); // offsetTop a cb de pixel il se trouve depuis le haut de la page

	window.scrollTo(0, distance);
}

goToTitre(titres[2]);