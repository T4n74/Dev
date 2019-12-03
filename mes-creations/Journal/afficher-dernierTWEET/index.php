<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Twitter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Starter Template</h1>
        <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
        <br><br>

    </div>
</div>


<div class="container">
</div>

<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Mes dernier tweets</h5>
                <?php
                require "vendor/autoload.php";
                $twitter = new Grafikart\Twitter(CONSUMER_KEY, CONSUMER_SECRET, __DIR__ . '/cache/tweets');
                ?>
                <ul class="white-text">
                    <?php foreach($twitter->lastTweets("Grafikart_fr") as $tweet): ?>
                    <li>
                        <?= Grafikart\Twitter::autoLink($tweet->text); ?>,
                        <small>
                            <?= Grafikart\Twitter::timeTag($tweet->created_at); ?>
                        </small>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<script src="js/vendor/jquery-1.11.3.min.js"></script>
<script src="js/vendor/materialize-0.97.0.min.js"></script>
<script src="js/jquery.timeago.js"></script>
<script src="js/main.js"></script>

</body>
</html>

