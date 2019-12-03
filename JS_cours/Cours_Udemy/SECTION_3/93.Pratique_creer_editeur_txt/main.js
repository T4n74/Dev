const texte = document.querySelector("textarea");
const render = document.querySelector("div");

texte.addEventListener("keyup", function () {
	render.innerHTML = marked(texte.value);
});