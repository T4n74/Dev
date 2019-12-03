const bar = document.querySelector(".bar");

addEventListener("scroll", function() {

	const max = document.body.scrollHeight - innerHeight;

	const pourcentage = pageYOffset / max * 100;

	bar.style.width = pourcentage + "%";

	console.log(`
		Taille page: ${document.body.scrollHeight}
		Taille affichage: ${innerHeight}
		Position scroll: ${pageYOffset}
		`);
});