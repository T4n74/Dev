addEventListener("click", function(event){
	const image = document.createElement("img");
	const size = 100;
	image.setAttribute("src", `http://lorempixel.com/${size}/${size}/`);
	
	image.style.position = "absolute";
	image.style.top = event.y - size / 2 + "px";
	image.style.top = event.x - size / 2 + "px";

	document.body.appendChild(image);
});