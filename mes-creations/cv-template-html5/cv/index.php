<?php

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo ="ophelie.crambert@gmail.com";


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
            $firstnameError = "Je veux connaitre votre prénom !";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Firstname: $firstname\n";
        }

         if(empty($name))
        {
            $nameError = "Et oui je veux tout savoir. Même votre nom !";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Name: $name\n";
        }

        if(!isEmail($email))
        {
            $emailError = "Ce n'est pas un email ça ....";
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
            $messageError = "Qu'est-ce que vous voulez me dire ?";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Message: $message\n";
        }
        if($isSuccess) 
        {
            $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message du site CV", $emailText, $headers);
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
        <title>CV ophelie crambert</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    
    
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Moi</a></li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#experience">Expérience</a></li>
                        <li><a href="#education">Formation</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                <!--    <li><a href="#recommandations">Recommandations</a></li>   -->
                    </ul>
                </div>
            
            </div>
        
        </nav>
       
        <section id="about" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="images/Thae_ophelie.png" alt="Ophélie" class="img-circle">
            </div>
            <div class="heading">
                <h1>Hello, c'est moi Ophélie</h1>
                <h3>Développeuse Web</h3>
                <a href="docs/cv-ocrambert.doc" class="button1">Télécharger CV</a>
            </div>
        </section>
        
        
        <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>HTML 85%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>CSS 85%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                <h5>JAVASCRIPT 50%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>PYTHON 80%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <h5>BOOTSTRAP 70%</h5>
                            </div>
                        </div>
                        <div class="progress"> 
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <h5>JQUERY 60%</h5>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        
        <section id="experience">
        
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Expérience Professionelle</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Création d'un site galerie</h3>
                                    <h4>Développer à l'aide du CMS Wordpress</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small>Août 2016- Mars 2017</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Ce site permet à un peintre amateur de montrer ces tableaux</p>
                                    <p>Aujourd'hui ce site est fermer</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>NEMOXIA stage</h3>
                                    <h4>Creation d'un site Web</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Juin- Juillet 2016</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Développement d'un Web afin de permettre aux utilisateurs de télécharger la bonne version des diverses applications</p>
                                </div>
                            </div>
                        </div>
                    </li>                     
                </ul>
            </div>
            
        </section>
                
        <section id="education">
            <div class="container">
                 <div class="red-divider"></div>
                <div class="heading">
                    <h2>Formation</h2>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="education-block">
                            <h5>Juin 2015 - Juillet 2015</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>Dispositif par le biais de la mission locale - Paris</h3>
                            <h4>Initiation au langage (HTML, CSS)</h4>
                            <div class="red-divider"></div>
                            <p>Decouverte des langages HTML et CSS</p>
                            <p>Mise en pratique afin de me faire une petite idée du métier</p>
                        </div>
                    </div>
                     <div class="col-sm-3">
                         <div class="education-block">
                            <h5>Novembre 2015 - Juillet 2016</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>GEFI</h3>
                            <h4>Formation niveau BTS Maintenance en Micro-Informatique</h4>
                            <div class="red-divider"></div>
                            <p><br> <br> <br>Titre non Obtenu,<br> Stage Validé <br> <br> <br></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="education-block">
                            <h5>Octobre 2016 - Mai 2017</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>LASER Formation</h3>
                            <h4>Formation niveau BAC d'Assistance en Informatique"</h4>
                            <div class="red-divider"></div>
                            <p><br> <br> <br>Titre Obtenu,<br> Stage Validé <br> <br></p>
                        </div>
                     </div>
                    <div class="col-sm-3">
                        <div class="education-block">
                            <h5>Novembre 2017 - Aujourd'hui</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>Formation U-Demy (elearning)</h3>
                          <!--  <h4></h4> -->
                            <div class="red-divider"></div>
                            <p>Apprendre HTML et CSS et créer un site Web</p>
                            <p>Apprendre Javascript</p>
                            <p>Apprendre jQuery</p>
                            <p>Apprendre Bootstrap et créer un CV en ligne responsive <br></p>
                            <p>Apprendre Python</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/voyage/index.html" target="_blank">
                            <img src="images/voyage.png" alt="voyage">
                        </a>
                    </div>
                     <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/serpent/index.html" target="_blank">
                            <img src="images/serpent.png" alt="serpent">
                        </a>
                    </div>
                     <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/actrices/index.html" target="_blank">
                            <img src="images/actrices.png" alt="actrices">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/BurgerCode/index.php" target="_blank">
                            <img src="images/burger.png" alt="burger">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/wordpress/bienvenue/index.php" target="_blank">
                            <img src="images/Boutique_des_Papuches.png" alt="Boutique_des_Papuches">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="thumbnail" href="http://thaeweblab.xyz/mes-creations/BurgerCode/admin/index.php" target="_blank">
                            <img src="images/Burger_Code_admin.png" alt="Burger_Code_admin">
                        </a>
                    </div>
                </div>
            
            </div>
            
        </section>
  <!--   
        <section id="recommandations">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Recommandations</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>  
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h3>"John t'es le meilleur!"</h3>
                            <h4>Larry Page, Google Co-Founder</h4>       
                        </div>
                          <div class="item">
                            <h3>"L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
                            <h4>Jack Dorsey, Twitter Founder and CEO</h4>       
                        </div>
                          <div class="item">
                            <h3>"Merci John de m'avoir appris à coder... Tout ça c'est grâce à toi!"</h3>
                            <h4>Mark Zuckerberg, Facebook Founder and CEO</h4>       
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                
                </div>
            
            </div>
        
        
        </section>
  -->     
   <!-- CONTACT -->
    <section id="contact">
       <div class="container"></div>
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Contact</h2>
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
                                <label for="email">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError; ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError; ?></p>
                            </div>
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
                        <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">Votre message a bien été envoyé. Merci de m'avoir contacté :)"</p>
                    </form>
                </div>
           </div>
        </div>
    </section>    
    <!--FOOTER-->       
             
        <footer class="text-center">
            <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <h5>Tous droits réservés © 2017 Thae</h5>
        </footer>
                
        
        
    </body>

</html>
