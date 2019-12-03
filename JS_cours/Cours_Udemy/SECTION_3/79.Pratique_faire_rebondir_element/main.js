const titre = document.querySelector("h1");

const cadre = document.querySelector("div");
const maxHeight = cadre.clientHeight;
const maxWidth = cadre.clientWidth;

titre.style.position = "relative";
let topPos = 0;
let leftPos = 0;
let forceH = -2;
let forceW = -2;

function animation() {
	if (topPos == 0) { forceH *= -1	} //des qu'il touche en haut il rebondit
	else if (topPos == maxHeight - titre.offsetHeight) {forceH *= -1 }

	if (leftPos == 0) { forceW *= -1	} //des qu'il touche en haut il rebondit
	else if (leftPos == maxWidth - titre.offsetWidth) {forceW *= -1 }

	topPos += forceH;
	topPos += forceW;

	titre.style.top = topPos + "px";
	titre.style.left = leftPos + "px";
}

requestAnimationFrame(animation); // 60img par sec qui va faire quelque chose de tres lisse
