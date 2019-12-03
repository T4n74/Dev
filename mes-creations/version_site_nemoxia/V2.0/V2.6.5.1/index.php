<!-- https://youtu.be/Rn4hUMztVzw  44:54-->
<?php
    if(!empty($_POST)){
        extract($_POST);
        $valid=true;
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
        		if(!in_array($service,array("partenariat","devis","contact","autre"))){ $service="contact";}
        		$to = "miss.thaeronya@gmail.com"; 			//  adresse destinataire
     	$sujet = $nom." a envoyer un message sur le site pour une demande de : " .$service;



            /* envoie des champs dans le mail recap*/
            $message .= "\n Son nom : " .$nom ;
            $message .= "\n Son prénom : " .$prenom ;
            $message .= "\n Son email : " .$email ;
            $message .= "\n Son numéro de télèphone: $phone ";
           



      		  $header = "From: $nom contact@thaeweblab.xyz \n";
// pour ne pas que le mail parte dans les spams 

        		$header .= "Reply-To: $email"; 
 // ainsi quand on fait repondre sa selectionne l'@mail de l'utilisateur

       		 $message = stripslashes($message);
       		 $nom = stripslashes($nom);
       		 $prenom = stripslashes($prenom);
       			 if(mail($to,$sujet,$message,$header)){
            		$erreur = "Votre message a bien été envoyé";
            		unset($nom);
            		unset($prenom);
            		unset($mail);
            		unset($phone);
            		unset($message);
        			}
        			
            else{
            			$error = "Une erreur est survenue et votre mail n'est pas parti";
        				}

    }
}
?><!DOCTYPE html>
<html>
    <head>
        <title>NEMOXIA</title>
         <meta http-equiv="Content_Type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <script src="js/script.js"></script>
<!--         <script src="php/contact1.php"></script> -->
        <style type="text/css">

input{
        border:dotted 1px #181818;
        font-family: 'Indie Flower', cursive;        
}
        /* pointillé autour des champs*/
textarea{
        border:dotted 1px #181818;
        width: 100%; /*taille du champs message*/
        height: 150px; /*taille du champs message*/
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
            <a href="index.php#presentation"><img src="images/logo2.png" alt="nemoxia"></a>
        </p>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>

                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" >

                        <div id="menu">
                            <dl>
                                <dt><a href="#main-image">Qui sommes nous</a></dt>
                            </dl>
                            <dl>
                                <dt><a href="#steps">Nos métiers</a></dt>
                                <dd>
                                    <ul>
                                            <li><a href="#">metier 1</a></li>
                                            <li><a href="#">metier 2</a></li>
                                            <li><a href="#">metier 3</a></li>
                                            <li><a href="#">metier 4</a></li>
                                            <li><a href="#">metier 5</a></li>
                                            <li><a href="#">metier 6</a></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a href="#possibilities">Outils</a></dt>
                            </dl>
                            <dl>
                                <dt><a href="#contact">Contact</a></dt>
                            </dl>
                        </div>
                    </ul>
                    </div>
        </nav>

        <section id="presentation" class="about">
            <img src="images/Site03-25_12-41-25.png" alt="tableau">
        </section>

<!-- Qui sommes nous -->
       <section id="main-image">
           <div class="about">
               <article><h1><!-- <img src="images/Site03-25_12-41-25.png" alt="tableau"><br><br><br><br> -->Qui sommes nous</h1>
                <br> 
                <p>Nemoxia crée en 2011, specialisé dans le secteur d'activié du conseil en systeme et logiciels informatique.<br><br>
                <p> Nemoxia vous apporte son s'avoir faire pour vous accompagné dans tous vos projets informatique.Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

 <br>

 <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>

 <br>

<p>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.
<br>
L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).</p>
</article>
<br><br><br><br><br><br>
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
                <h1>Outils de prise en main a distance</h1><br><br><br><br>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis.</p>
                <p>Bonjour, cette partie est reservé au clients NEMOXIA sous contrat.</p><br><br><br><br>
                <p>Veuillez trouvez ci-dessous le lien Anydesk</p>
                <a href="https://download.anydesk.com/AnyDesk.exe?_ga=2.224838931.840249074.1555663130-2005569636.1555515605" target="_blank">Outil ANYDESK pour Windows</a>
<br><br>
                <a href="https://download.anydesk.com/anydesk.dmg?_ga=2.124242051.840249074.1555663130-2005569636.1555515605" target="_blank">Outil ANYDESK pour MacOs</a>
               <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </section>

        <!-- CONTACT -->
    <section id="contact">
       <div class="container"></div>
            <div class="red-divider"></div>
            <div class="heading">
                <h1></h1>
             </div>
             <div class="row"> 
             <br>   
    <form method="post" action="index.php#contact"> <!-- #contact afin de rafraichir et reste sur cette partie de la page -->
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
            <label for="phone">Telephone :</label>
        <input type="tel" name="phone" id="phone" />
        </div>
<br>
        <div class="col-xs-6">
        <label for="email">Quel service souhaitait vous contacter ?</label>
            <select id="service" name="service">
                <option value="partenariat">Partenariat</option>
                <option value="devis">Devis</option>
                <option value="contact">Contact</option>
                <option value="autre">Autre</option>

            </select>
        </div>
        <br>
        <input type="text" name="adresse" id="adresse"/><!-- afin deviter le spam de robot  -->
            <div class="col-xs-12">
            <label for="message" id="champs">Votre message <span class="white">*</span> :</label>
        <textarea name="message" id="message"><?php if(isset($message)) echo $message; ?></textarea>
           <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
<br>  

<p class="thank-you" style="display:<?php if($valid) echo 'block'; else echo 'none';?>">Votre message a bien été envoyé."</p>

<br>     
        <input class="button2" type="submit" value="Envoyer"/>
            </div>

    </form>
                </div>
           </div>
        </div>
    </section>    
        <footer>
            <div>
                <h1><img src="images/output-onlinepngtools.png" alt="nemoxia"></h1>
                <div class="copyright">Copyright © 2019. Tous droits réservés.</div><br>
			</div>
        </footer>
                
        
        
    
    </body>

</html>





