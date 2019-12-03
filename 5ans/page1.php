<?php

    $log = $enfant = $dest = $pro = $email = "";
    $logError = $enfantError = $emailError = $destError = $proError = "";
    $isSuccess = false;
    $emailTo ="ophelie.crambert@gmail.com";


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $log = verifyInput($_POST["log"]);
        $enfant = verifyInput($_POST["enfant"]);
        $dest = verifyInput($_POST["dest"]);
        $pro = verifyInput($_POST["pro"]);
        $isSuccess= true; 
        $emailText = "";
     
        if(empty($log))
        {            
            $logError = "";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "log: $log\n";
        }

         if(empty($enfant))
        {
            $enfantError = "";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "enfant: $enfant\n";
        }

 		if(empty($dest))
        {            
            $destError = "";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "dest: $dest\n";
        }

         if(empty($pro))
        {
            $proError = "";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "pro: $pro\n";
        }

    	if(!isEmail($email))
        {
            $emailError = "Je veux ton email grrrr ^^";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Email: $email\n";
        }
        if($isSuccess) 
        {
            $headers = "From: $email <$email>\r\nReply-To: $email";
            mail($emailTo, "Reponse de totoro", $emailText, $headers);
            $log = $enfant = $dest = $pro = $email = "";

        }
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
		<title> 5 Ans</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet' type='text/css'>
		<script src="js/script.js"></script>
	</head>


	<body>
		<div class="container site">
			<h1 class="text-logo"><span class="glyphicon glyphicon-heart"></span>           5 ANS DE VIE COMMUNE !! <span class="glyphicon glyphicon-heart"></span></h1>

			<nav>
				<ul class="nav nav-pills">
					<li role="presentation" class="active"><a href="#1" data-toggle="tab">Notre vie</a></li>
					<li role="presentation"><a href="#2" data-toggle="tab">Photos de nous</a></li>
					<li role="presentation"><a href="#3" data-toggle="tab">Photos surprise</a></li>
					<li role="presentation"><a href="#4" data-toggle="tab">Interrogations <span class="glyphicon glyphicon-question-sign"></span></a></li>
				</ul>
			</nav>
			<div class="tab-content">  
				<div class="tab-pane active" id="1">
					<div class="row">
						<div class="thumbnail">
								<div class="caption">
									<h4> NOTRE VIE <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span></h4>
										<br>
										<br>
		<p><u>Ce bonheur a commencé le 22 / 12 / 2012 Merci pour ces années de joies</u></p>
										<br>
										<br>
		<p>Je t'ai fait ce site afin de te montrer que par amour <br> je suis prête à te décrocher la lune, <br>
			simplement te soutenir comme je le fais depuis toutes ces années <br> sauf qu'aujourd'hui je ne sais pas si tu le vois toujours. <br> <br>
									<span class="glyphicon glyphicon-heart"></span>
		Je t'admire, et te respecte pour ce que tu te bats au quotidien pas seulement pour nous/ moi mais aussi pour tes enfants.
										<span class="glyphicon glyphicon-heart"></span>
										<br>
										<br>
									<span class="glyphicon glyphicon-heart"></span>
		Je t'aime et j'aime l'homme que tu es devenu, car en 5 ans de relations tu as changé et je t'en remercie; <br> tu ne te laisse plus faire par ton ex, <br> car tu avais du remords de ce qui c'est passé. <br> Aujourd'hui tu te bats tu es présent pour tes enfants et c'est le plus important!
									<span class="glyphicon glyphicon-heart"></span>
									<br>
									<br>
									<span class="glyphicon glyphicon-heart"></span>
		Il y a 5 ans on se parlait pour la 1 ere fois sur ce site de rencontres <br> j'avais juste besoin de vider mon sac et tu as étais là, <br> depuis nous nous sommes jamais quitté; <br> je ne croyais pas en l'amour  -  prince charmant  -  un homme qui croit en toi  -  un homme prêt a tout pour moi je n'y croyais pas, <br> maintenant je n'ai plus le choix d'y croir puisque depuis 5 ans tu me pousses a voir plus haut <br> alors que j'était au fond du trou quand on s'est connu.
									<span class="glyphicon glyphicon-heart"></span>
									<br>
									<br>
									<span class="glyphicon glyphicon-heart"></span>
		Tu étais aussi trés mal à cette époque on s'est soutenue mutuellement <br> et je ne regrette pas de t'avoir aidé à ma manière et à continuer aujourd'hui. <br>
		 J'aimerais que tu me dises plus souvent que je t'aide réellement <br> car j'ai souvent l'impression de ne pas faire assez <br> ou <br>
		 peut-être attends-tu autre chose que ce que je fais à l'heure actuelle ? 
		   							<span class="glyphicon glyphicon-heart"></span>
									<br>
									<br>

		   						</p>
								</div>						
							</div>
					</div>
				</div>  
				<div class="tab-pane " id="2">
					<div class="row">
							<div class="thumbnail">
								
	<!--CAROUSEL-->
								<h4>NOTRE VIE EN PHOTO</h4>
								<div id="monCarousel" class="carousel slide" data-ride="carousel" style="width: 600px" style="height: 800px;" >

									<ol class="carousel-indicators"> 
										<li data-target="monCarousel" data-slide-to="0" class="active"></li>
										<li data-target="monCarousel" data-slide-to="1"></li>
										<li data-target="monCarousel" data-slide-to="2"></li>
										<li data-target="monCarousel" data-slide-to="3"></li>
										<li data-target="monCarousel" data-slide-to="4"></li>
										<li data-target="monCarousel" data-slide-to="5"></li>
										<li data-target="monCarousel" data-slide-to="6"></li>
										<li data-target="monCarousel" data-slide-to="7"></li>
										<li data-target="monCarousel" data-slide-to="8"></li>
										<li data-target="monCarousel" data-slide-to="9"></li>
									</ol>
									<div class="carousel-inner" role="listbox">

									<div class="item active">
										<img src="images/1.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/2.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/3.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/4.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/5.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/6.jpg" alt="...">
										<div class="carousel-caption">
										
										</div>
									</div>
									<div class="item">
										<img src="images/7.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/8.jpg" alt="...">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/9.jpg" alt="...">
										<div class="carousel-caption">
											
										</div>
									</div>
									
									</div>


									<a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>

									<a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>
							</div>
						</div>
				</div>
				<div class="tab-pane" id="3">
					<div class="row">
						<div class="thumbnail">
								
	<!--CAROUSEL 2-->			<h4>PHOTO POUR TE FAIRE PLAISIR</h4>
								<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 400px" style="height: 400px;" >

									<ol class="carousel-indicators"> 
										<li data-target="myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="myCarousel" data-slide-to="1"></li>
										<li data-target="myCarousel" data-slide-to="2"></li>
										<li data-target="myCarousel" data-slide-to="3"></li>
										<li data-target="myCarousel" data-slide-to="4"></li>
										<li data-target="myCarousel" data-slide-to="5"></li>
										<li data-target="myCarousel" data-slide-to="6"></li>
										<li data-target="myCarousel" data-slide-to="7"></li>
										<li data-target="myCarousel" data-slide-to="8"></li>
										<li data-target="myCarousel" data-slide-to="9"></li>
										<li data-target="myCarousel" data-slide-to="10"></li>
										<li data-target="myCarousel" data-slide-to="11"></li>
										<li data-target="myCarousel" data-slide-to="12"></li>
										<li data-target="myCarousel" data-slide-to="13"></li>
										<li data-target="myCarousel" data-slide-to="14"></li>
										<li data-target="myCarousel" data-slide-to="15"></li>
										<li data-target="myCarousel" data-slide-to="16"></li>
										<li data-target="myCarousel" data-slide-to="17"></li>
									</ol>

									<div class="carousel-inner" role="listbox">

									<div class="item active">
										<img src="images/kiara0.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara1.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara2.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara3.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara4.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara5.jpg" alt="Kiara">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/kiara-kyllian.jpg" alt="2-enfants">
										<div class="carousel-caption">
											
										</div>
									</div>
									<div class="item">
										<img src="images/q1.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
											<h3>Notre bébé</h3>
										</div>
									</div>
									<div class="item">
										<img src="images/q2.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q3.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q4.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q5.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q6.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q7.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q8.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/q9.jpg" alt="Quick-Quick">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/totoro.jpg" alt="totoro">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>
									<div class="item">
										<img src="images/totoro1.jpg" alt="totoro">
										<div class="carousel-caption">
											<br>
											<br>
										</div>
									</div>

									</div>


									<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>

									<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>
							</div>
						
					</div>
					</div>
					<div class="tab-pane" id="4">
						<div class="row">
							<div class="thumbnail">
								<div class="caption">	
									<h4> INTERROGATIONS </h4>
								</div>

							<form id="quest-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form" style="text-align: center; font-size: 23px; color: #995220;">

								<div class="form-group"> <!--radio-->
							<label for="comment">Es-tu heureux avec moi ?
		<br>						
								<input type="radio" value="oui" name="decision">Oui
		<br>
								<input type="radio" value="non" name="decision">Non
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span>
		<br>
		<br>
								<div class="form-group"> <!--radio-->
							<label for="comment">Veux tu m'épouser  ?</label>
								<label><input type="radio" value="oui" name="rep">Oui
		<br>
								<input type="radio" value="non" name="rep">Non
		<br>						
								<div class="form-group">
								<label for="comment">pourquoi NON ? ?</label>
									<textarea class="form-control" id="comment"></textarea>
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span>
		<br>
		<br>

						<div class="form-group"> <!-- radio-->
							<label for="comment"> Pouvons-nous adopter deuxièmeme lapin, de race géant papillon et <br> on l'appellera Groot  ?</label>
		<br>
								<label><input type="radio" value="oui" name="animaux">Oui</label>
		<br>			
								<input type="radio" value="non" name="animaux">Non	
							<div class="form-group">				
		<br>	
		<br>
							<label for="comment">pourquoi NON  ? ?</label>
								<textarea class="form-control" id="comment"></textarea>
							</div>	
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span>
		<br>
		<br>		
							<div class="form-group">
                                <label for="comment">Projettes-tu dans l'avenir proche avec maison ou <br> simplement plus grand afin d'accueillir tout le monde  ?</label>
        <br>
        <br>
                                <input id="text" type="text" name="log" class="form-control" placeholder="" value="<?php echo $log; ?>">
                            </div>
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span>
		<br>
		<br>
							 <div class="form-group">
                                <label for="comment">Envisages-tu le fait que l'on n'est pas d'enfants ensemble  ? <br>
								Je te parle sur le long therme car aujourd'hui j'aime notre rythme de vie <br> (jeux vidéo, coucher tard, manger à heure où l'on veux lool) <br> simplement je ne me sens pas prête et surtout je veux travailler et ne plus être a la maison</label>
		<br>
		<br>
                                <input id="text" type="text" name="enfant" class="form-control" placeholder="ton Avis" value="<?php echo $enfant; ?>">
                            </div>
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span>
		<br>	
		<br>				<div class="form-group">									
                                <label for="comment">Que penses-tu du site que je t'ai fait je veux ton avis en tant que Destinataire  ?</label>
        <br>
                                <input id="text" type="text" name="dest" class="form-control" placeholder="ton Avis du coeur" value="<?php echo $dest; ?>">
                            </div>
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span>
							
		<br>
		<br>	
							<div class="form-group">									
                                <label for="comment">Que penses-tu du site que je t'ai fait je veux ton avis en tant que Professionel  ?</label>
        <br>
                                <input id="text" type="text" name="pro" class="form-control" placeholder="ton avis en tant que pro" value="<?php echo $pro; ?>">
                            </div>
		<br>	
		<br>
								<span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span>
		<br>
		<br>
						 <div class="col-md-6">
                                <label for="email">Email <span class="blue">*</span></label>
        <br>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError; ?></p>
                            </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
							<div class="col-md-12">
                                <input type="submit" class="button2" value="Envoyer">
                            </div>
                                <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">Je t'aime mon totoro Câlinoux <br> Merci pour tout ! :)"</p>
                    </form>
		<br>
		<br> 
		<br>
		
		<br> 								</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		<footer class="text-center">
            <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <h5>Tous droits réservés © 2017 Thae</h5>
        </footer>
	</body>


</html>