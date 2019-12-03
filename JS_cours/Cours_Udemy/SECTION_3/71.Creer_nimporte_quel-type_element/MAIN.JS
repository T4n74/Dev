const titre = document.body.getEmementById("titre"); 
const texte = document.body.getEmementsByTagName("p");

function ajouterTexte(pseudo, monTexte) {
	const nouveauTexte = document.createElement("p");
	nouveauTexte.innerHTML'<strong>${pseudo}:${monTexte}';

	document.body.appendChild(nouveauTexte);
	}
ajouterTexte("Alban","épouse-moi");
ajouterTexte("Alban","je t'aime");
ajouterTexte("Alban","pour la vie");
ajouterTexte("Alban","03122014");
ajouterTexte("Alban","22122012");
ajouterTexte("Thae","je veux un cochon");
ajouterTexte("Thae","je veux me faire decouper la langue");
ajouterTexte("Thae","je veux te voir sourir");
ajouterTexte("Thae","je veux ton bonheur");