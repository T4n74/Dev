function sendData(data) {
  var XHR = new XMLHttpRequest();
  var FD  = new FormData();

  // Mettez les données dans l'objet FormData
  for(name in data) {
    FD.append(name, data[name]);
  }

  // Définissez ce qui se passe si la soumission s'est opérée avec succès
  XHR.addEventListener('load', function(event) {
    alert('Ouais ! Données envoyées et réponse chargée.');
  });

  // Definissez ce qui se passe en cas d'erreur
  XHR.addEventListener('error', function(event) {
    alert('Oups! Quelque chose s\'est mal passé.');
  });

  // Configurez la requête
  XHR.open('POST', 'index.php');

  // Expédiez l'objet FormData ; les en-têtes HTTP sont automatiquement définies
  XHR.send(FD);
}