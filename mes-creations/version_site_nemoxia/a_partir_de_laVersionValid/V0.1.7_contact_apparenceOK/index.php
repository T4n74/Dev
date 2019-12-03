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
        <script src="js/script.js"></script>
        <script src="php/contact1.php"></script>
        <style type="text/css">

        input{
            border:dotted 1px #181818;
        }
        /* pointillé autour des champs*/
        textarea{
            border:dotted 1px #181818;
            width: 100%;
            height: 150px;
        }
        /*cursor: pointer; pour avoir un main sur le btn envoyer*/
        input[type=submit]{
            background: #017dc5; /*fond du btn envoyer*/
            cursor: pointer;
        }
        /*au survole de la souris sur le btn envoyer changement de couleur*/
        input[type=submit]:hover{
            background: #fff;
        }
        .error-message{
            color: black; /* msg noir champs vide*/
            font-style: italic; /*italic*/
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
               <article><h1><img src="images/output-onlinepngtools.png" alt="nemoxia"><br>Qui sommes nous</h1>
                <br> 
                <p>Nemoxia crée en 2011, specialisé dans le secteur d'activié du conseil en systeme et logiciels informatique.<br><br><br>
                    Nemoxia vous apporte son s'avoir faire pour vous accompagné dans tous vos projets informatique.</article>
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
                            
                        </ul>                      
                    </div>
                </article>          
        </section>
    <!-- AU SECOURS-->
        <section id="possibilities">
            <div class="about">
                <h1>Au secours</h1>
                <p>Bonjour, cette partie est reservé au clients NEMOXIA sous contrat.</p><br><br><br><br><br>
                <p>Veuillez trouvez ci-dessous/dessus je ne sais pas ou il va pop le lien Anydesk</p>
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
        <div class="col-md-6">
            <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
            <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
        </div>

        <div class="col-md-6">
            <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php if(isset($prenom)) echo $prenom; ?>"/>
            <span class="error-message"><?php if(isset($erreurprenom)) echo $erreurprenom; ?></span>
        </div>
<br><br>
        <div class="col-md-6">
            <label for="email">Email :</label>
        <input type="email" name="email" id="email"/>
            <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
        </div>

        <div class="col-md-6">
            <label for="phone">Telephone :</label>
        <input type="tel" name="phone" id="phone" value="<?php if(isset($phone)) echo $phone; ?>"/>
            <span class="error-message"><?php if(isset($erreurphone)) echo $erreurphone; ?></span>
        </div>
<br><br>
        <div class="col-md-6">
        <label for="email">Le service à contacter :</label>
        <select id="service" name="service">
            <option value="partenariat">Partenariat</option>
            <option value="devis">Devis</option>
            <option value="contact">Contact</option>
            <option value="autre">Autre</option>

        </select>
        </div>
        
            <label for="message">Votre message :</label><br>
        <textarea name="message" id="message"><?php if(isset($message)) echo $message; ?></textarea>
            <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
<br><br>
       
        <input class="button2" type="submit" value="Envoyer"/>

    </form>
                </div>
           </div>
        </div>
    </section>    
        <footer>
            <div>
                <h1>NEMOXIA</h1>
                <div class="copyright">Copyright © 2019. Tous droits réservés.</div>
			</div>
        </footer>
                
        
        
    
    </body>

</html>






