<?php

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo ="alban.clergeot@nemoxia.fr";


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess= true; 
        $emailText = "";

        if(empty($firstname))
        {            
            $firstnameError = "On veut connaitre votre prénom !";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Firstname: $firstname\n";
        }

         if(empty($name))
        {
            $nameError = "Vous avez oublier votre nom !";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Name: $name\n";
        }

        if(!isEmail($email))
        {
            $emailError = "Ce n'est pas un email valide";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Email: $email\n";
        }
         if (!isPhone($phone))
        {
            $phoneError = "Que des chiffres et des espaces, svp.";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Phone: $phone\n";
        }
         if(empty($message))
        {            
            $messageError = "Quel est votre message ?";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Message: $message\n";
        }
        if($isSuccess) 
        {
            $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message du site nemoxia", $emailText, $headers);
            $firstname = $name = $email = $phone = $message = "";

        }
    } 

    function isPhone($var) 
    {
        return preg_match("/^[0-9 ]*$/",$var);
    } 

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }  
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NEMOXIA</title>
         <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
        <script src="php/contact1.php"></script>
        
        
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
               <article><h1>Qui sommes nous</h1>
                <br> 
                <p>Nemoxia crée en 2011, specialisé dans le secteur d'activié du conseil en systeme et logiciels informatique.<br>
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
                <p>Bonjour, cette partie est reservé au clients NEMOXIA sous contrat.</p>
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
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre Prénom" value="<?php echo $firstname; ?>">
                                <p class="comments"><?php echo $firstnameError; ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="name">Nom <span class="blue">*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name; ?>">
                                <p class="comments"><?php echo $nameError; ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email <span class="blue"> *</span></label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError; ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError; ?></p>
                            </div>
<!-- Liste deroulante-->
                             <div class="col-md-6">
                                <div class="choix">
                                 <label for="choix">Quel est votre demande? <span class="blue">*</span></label>
                                 <input id="demande" type="text" name="choix" class="form-control" value="<?php echo $choix; ?>">
                                <p class="comments"><?php echo $choixError; ?></p>
                              <!-- <FORM>
                                    <SELECT name="choix" size="3">
                                        <OPTION>Devis
                                        <OPTION>Renseignement
                                        <OPTION>Partenariat
                                        <OPTION>Autre
                                    </SELECT>
                                </FORM>
                             </div>
                            </div> -->
                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"><?php echo $message; ?></textarea>
                                <p class="comments"><?php echo $messageError; ?></p>
                            </div>

                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button2" value="Envoyer">
                            </div>
                        </div>
                        <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">Votre message a bien été envoyé. Merci de nous avoir contacté :)"</p>
                    </form>
                </div>
           </div>
        </div>
    </section>    
        <footer>
            <div class="wrapper">
                <h1 class="blue" >NEMOXIA</h1>
                <div class="copyright">Copyright © 2019. Tous droits réservés.</div>
			</div>
        </footer>
                
        
        
    
    </body>

</html>






