var maxprogress = 250;   // total à atteindre
var actualprogress = 70;  // valeur courante
var itv = 0;  // id pour setinterval
function prog()
{
  if(actualprogress >= maxprogress) //barre de chargement
  {
    clearInterval(itv);   	
    return;
  }	
  var progressnum = document.getElementById("progressnum");
  var indicator = document.getElementById("indicator");
  actualprogress += 1;	
  indicator.style.width=actualprogress + "px";
  progressnum.innerHTML = actualprogress;
  if(actualprogress == maxprogress) clearInterval(itv);   
}