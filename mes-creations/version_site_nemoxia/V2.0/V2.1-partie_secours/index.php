<?php
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;

    if(empty($nom)){
        $valid=false;
        $erreurnom="Vous n'avez pas rempli votre nom ";
    }
    if(empty($prenom)){
        $valid=false;
        $erreurprenom="Vous n'avez pas rempli votre prenom ";
    }

    if(empty($email)){
        $valid=false;
        $erreuremail="Vous n'avez pas rempli votre email ";
    }
    if(empty($phone)){
        $valid=false;
        $erreurphone="Vous n'avez pas rempli votre telephone ";
    }

    if(empty($message)){
        $valid=false;
        $erreurmessage="Vous n'avez pas rempli votre message ";
    }

    if($valid){
        if(!in_array($service,array("partenariat","devis","contact","autre"))){ $service="contact"; }
        $to = "opheliee_x@live.fr";
        $sujet = $nom. $prenom. " a envoyer un message sur le site pour une demande :" .$service;
        $header = "From: contact@thaeweblab.xyz \n"; 
// pour ne pas que le mail parte dans les spams|| ainsi quand on fait repondre sa selectionne l'@mail de l'utilisateur
        $header .= "Reply-To: $email";

        $message = stripslashes($message);
        $nom = stripslashes($nom);
        $prenom = stripslashes($prenom);
        $phone = stripslashes($phone);
        if(mail($to,$sujet,$message,$header)){
            $erreur = "Votre message nous ai bien parvenu";
            unset($nom);
            unset($prenom);
            unset($mail);
            unset($phone);
            unset($message);
        }
        else{
            $erreur = "Une erreur est survenue et votre mail n'est pas parti";
        }

    }
}
?><!DOCTYPE html>
<html>
    <head>
        <title>NEMOXIA</title>
         <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <script src="js/script.js"></script>
        <script src="php/contact1.php"></script>
        <style type="text/css">

input{
        border:dotted 1px #181818;
        font-family: 'Indie Flower', cursive;        
}
        /* pointillé autour des champs*/
textarea{
        border:dotted 1px #181818;
        width: 100%;
        height: 150px;
        font-family: 'Indie Flower', cursive;        
}
        /*cursor: pointer; pour avoir un main sur le btn envoyer*/
input[type=submit]{
        background: #017dc5; /*fond du btn envoyer*/
        cursor: pointer;
        font-size: 18px;
}
        /*au survole de la souris sur le btn envoyer changement de couleur*/
input[type=submit]:hover{
        background: #fff;
        font-size: 20px;
/*        font-family: 'Indie Flower', cursive;
*/}
.error-message{
/*        font-family: 'Indie Flower', cursive;            
*/        color: white; /* msg erreur quand champs vide*/
        font-style: italic; /*italic*/
        font-size: 15px;
}

        </style>
        
    </head>
    
    
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
        <p class="flotte">
            <img src="images/output-onlinepngtools.png" alt="nemoxia">
        </p>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#main-image">Qui sommes nous</a></li>
                        <li><a href="#steps">Nos métiers</a></li>
                        <li><a href="#possibilities">Au secours</a></li>
                        <li><a href="#contact">Contact</a></li>

                    </ul>
                </div>
            
            </div>
        
        </nav>
        

<!-- Qui sommes nous -->
       <section id="main-image">
           <div class="about">
               <article><h1><img src="images/output-onlinepngtools.png" alt="nemoxia"><br><br><br><br>Qui sommes nous</h1>
                <br> 
                <p>Nemoxia crée en 2011, specialisé dans le secteur d'activié du conseil en systeme et logiciels informatique.<br>
                <p> Nemoxia vous apporte son s'avoir faire pour vous accompagné dans tous vos projets informatique.Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

 <br><br><br>

 <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>

 <br><br><br>

<p>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.
<br>
L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).</p>
</article>
           </div>
       </section>
       
<!-- Nos métiers -->
        <section id="steps">
            <div class="about">
                <article><h1>Nos métiers</h1> 
                        <ul>
                            <li>Consulting IT</li>
                            <li>Gouvernance des SI</li>
                            <li>Conseil</li>
                            <li>Architecture des SI</li>
                            <li>gestion de projet "évolution"</li>
                            <p> Mais aussi ...</p>
                            <li>Maintenance Micro-informatique</li>
                            <li>Administration systéme et réseau</li>
                            <li>gestion des incident</li>
                            <li>Sauvegarde (local / cloud)</li>
                            <p>Nous proposons aussi un service de recrutement personalisé !</p>
                            <li>irréprochable</li>
                            <li>irréprochable</li>
                            <li>irréprochable</li>
                            <li>irréprochable</li>
                            <li>irréprochable</li>
                            <li>irréprochable</li>

                        </ul>
                </article>                      
            </div>          
        </section>
    <!-- AU SECOURS-->
        <section id="possibilities">
            <div class="about">
                <h1>Au secours</h1><br>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis.</p>
            <p>Bonjour, cette partie est reservé au clients NEMOXIA sous contrat.</p><br><br><br><br><br>
            <p>Veuillez trouvez ci-dessous le lien Anydesk</p>
            <br><br><br><br><br>
            <a href="https://anydesk.com/fr/downloads/windows" target="_blank">Outil ANYDESK</a>
 

            </div>
        </section>

        <!-- CONTACT -->
    <section id="contact">
       <div class="container"></div>
            <div class="red-divider"></div>
            <div class="heading">
                <h1>Contact</h1>
             </div>
             <div class="row">
                
    <form method="post" action="index.php">
        <div class="col-xs-6">
            <label for="nom">Nom <span class="white">*</span> :</label>
        <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
            <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
        </div>

        <div class="col-xs-6">
            <label for="prenom">Prenom <span class="white">*</span> :</label>
        <input type="text" name="prenom" id="prenom" value="<?php if(isset($prenom)) echo $prenom; ?>"/>
            <span class="error-message"><?php if(isset($erreurprenom)) echo $erreurprenom; ?></span>
        </div>
<br><br>
        <div class="col-xs-6">
            <label for="email">Email <span class="white">*</span> :</label>
        <input type="email" name="email" id="email"/>
            <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
        </div>

        <div class="col-xs-6">
            <label for="phone">Telephone <span class="white">*</span> :</label>
        <input type="tel" name="phone" id="phone" value="<?php if(isset($phone)) echo $phone; ?>"/>
            <span class="error-message"><?php if(isset($erreurphone)) echo $erreurphone; ?></span>
        </div>
<br><br>
        <div class="col-xs-6">
        <label for="email">Quel service souhaitait vous contacter ?</label>
            <select id="service" name="service">
                <option value="partenariat">Partenariat</option>
                <option value="devis">Devis</option>
                <option value="contact">Contact</option>
                <option value="autre">Autre</option>

            </select>
        </div>
            <div class="col-xs-12">
            <label for="message" id="champs">Votre message <span class="white">*</span> :</label>
        <textarea name="message" id="message"><?php if(isset($message)) echo $message; ?></textarea>
            <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
        
<br><br>
       
        <input class="button2" type="submit" value="Envoyer"/>
</div>
    </form>
                </div>
           </div>
        </div>
    </section>    
        <footer>
            <div>
                <h1>NEMOXIA<br><br><img src="images/output-onlinepngtools.png" alt="nemoxia"></h1>
                <div class="copyright">Copyright © 2019. Tous droits réservés.</div><br>
			</div>
        </footer>
                
        
        
    
    </body>

</html>






