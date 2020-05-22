<?php include_once 'controller/c_index.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/globals/logo_brut.png">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Olympiades</title>
</head>
<body>

<style type="text/css">
    .cookies{
        bottom: -10px;
        position: fixed;
        height:80px;
        background: rgba(59, 58, 58, 0.85);
        width: 100%;
        padding: 20px;
        animation: animate-up .8s, fade-in 1s;
    }

    #closeCookies {
        cursor: pointer;
        background-color: transparent;
        border: inherit;
    }
    .material-close {
        background-color: rgba(191, 161, 16, 0.86);
    }



    @keyframes animate-up{
        0% {
            transform: translateY(70px);
            animation-timing-function: cubic-bezier(.200, -.461, .355, 1.6);
        }
        100% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(.55, .055, .675, .1);
        }
    }
</style>

<header>
<!--NAVIGATION BAR-->
<div class="navbar-fixed">
    <nav class="gold-back">
        <div class="nav-wrapper row black-back">
            <a id="logo" href="" class="brand-logo left" title="Accueil"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right hide-on-med-and-down" title="Menu"><i class="material-icons">menu</i></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right show-on-medium-and-down" title="Menu"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!--Proofs-->
                <li>
                    <a class='dropdown-trigger text-20' href='#' data-target='dropdownProof' title="">Epreuves</a>

                    <ul id='dropdownProof' class='dropdown-content'>
                        <li><a href="views/proofs/chartes.php" title="Fair-Play">Fair-Play</a></li>
                        <li class="divider"></li>
                        <li><a href="views/proofs/beer.php" title="Beer-Pong">Beer-Pong</a></li>
                        <li><a href="views/proofs/corn.php" title="Cornhole">Cornhole</a></li>
                        <li><a href="views/proofs/flip.php" title="Flip Cup">Flip cup</a></li>
                    </ul>
                </li>
                <li>
                    <a class='text-20 red-text' href='views/talk/talk.php' title="Trash Talk">Trash talk</a>
                </li>
                <li class="gold-back"><a href="views/login/login.php" title="Compte"><i class="material-icons">person</i></a></li>
                <li><a href="#" title="facebook"><img class="margin-t-15" src="assets/images/globals/facebook.png" alt=""></a></li>
            </ul>
        </div>
    </nav>

</div>

</header>
<!--Mobile Navigation-->
<ul class="sidenav grey darken-4" id="mobile-demo">
    <li class="row gold-back">
        <div class="center-align secondFont text-20">BE ALL IN</div>
        <div class="row">
            <img class="responsive-img col s6 offset-s3 circle" src="assets/images/globals/logo_brut.png" alt="Les Olympiades">

            <div class="center-align secondFont text-20 col s12">be olympiades</div>
        </div>
    </li>
    <li><a href="./index.php" class="white-text" title="Accueil">Accueil<i class="material-icons white-text">home</i></a></li>
    <li><a href="views/talk/talk.php" class="red-text" title="Trash Talk">Trash talk<i class="material-icons red-text">whatshot</i></a></li>
    <ul class="collapsible white-text">
        <li>
            <div class="collapsible-header gold-back row">
                <div class="col s12 valign-wrapper secondFont text-30 black-text text-contrast"><i class="material-icons">arrow_downward</i>Epreuves</div>
            </div>
            <div class="collapsible-body grey darken-3">
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-3 text-20 col s12" href="views/proofs/chartes.php" title="Fair-Play"><i class="tiny material-icons">description</i>    Fair-Play</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="views/proofs/beer.php" title="Beer-Pong"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="views/proofs/corn.php" title="Cornhole"><i class="tiny material-icons">gps_fixed</i>    Cornhole</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="views/proofs/flip.php" title="Flip Cup"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li class="divider"></li>
    </ul>
    <li>
        <a href="views/login/login.php" class="white-text" title="Compte"><i class="material-icons white-text">person</i> Mon Compte</a>
    </li>
    <li class="divider"></li>
    <li>
        <a id="facebookSide" href="#" title="facebook"></a>
    </li>
</ul>
<main>

    <!--TIMER-->
    <h1 class="center-align secondFont text-25">Début des hostilités dans :</h1>

    <div id="clock" class="container row center-align thirdFont">
        <div id="clock1" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock2" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven white-text bigText">:</div>
        <div id="clock3" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock4" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven white-text bigText">:</div>
        <div id="clock5" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock6" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven white-text bigText">:</div>
        <div id="clock7" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock8" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
    </div>

    <!--SUBSCRIBE MESSAGE-->
    <div class="center-align text-25 card red white-text"><?= $message ?></div>

    <section id="indexImage">
            <div id="filter-grey" class="white-text valign-wrapper row">
                <div class="col s12">
                    <div class="center-align">

                        <img id="indexLogo" src="assets/images/globals/logo_brut.png" alt="Logo" class="responsive-img border-gold">

                    </div>
                    <!--FORM SUBSCRIPTION-->
                    <div class="center-align section">
                        <a id="button-inscription" class="btn-large secondFont text-30 z-depth-5" href="views/login/subscribe.php" title="Inscris toi">Inscription</a>
                    </div>
                </div>
            </div>
    </section>

</main>

<!--BREAKING NEWS-->
<div class="ticker section" role="complementary">
    <div class="ticker-tip">
        <div class="ticker-tip-info valign-wrapper">
            <i class ="material-icons circle z-depth-5">info</i>
            <span>    DERNIERE MINUTES<span>
        </div>
    </div>
    <div class="ticker-title">
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
        <span>Breaking News</span>
    </div>
    <div class="ticker-news">
    <span>

    <?php foreach ($tab_final as $news) {  ?>
      <span><?= $news ?></span><b class="red-text"> ||</b>
    <?php } ?>
    </div>
</div>
<!--COOKIES BANNER-->
<?php if (!$_COOKIE['accept']) {?>
<form action="" method="post">
    <div class="cookies white-text valign-wrapper">
        Afin de t'offrir une meilleure expérience de navigation, nous partons du principes que tu acceptes l'utilisation des cookies.
        <button name="acceptCookies" class="circle" id="closeCookies"><i class="material-icons circle material-close">close</i></button>
    </div>
</form>
<?php } ?>


<footer class="white-text black-back hide-on-med-and-down">
    <div>
        © 2020 Olympic Society
        <a class="black-text text-lighten-4 right" href="https://github.com/CocoCouq/Olympiades" target="_blank" title="Auteur">Code Source</a>
    </div>
</footer>

<script src="./assets/js/app.js"></script>
<script src="./assets/js/clock.js"></script>
</body>
</html>
