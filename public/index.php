<?php include_once 'controllers/c_index.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/globals/favicon.png">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Olympiades</title>
</head>
<body>

<header>
    <!--NAVIGATION BAR-->
    <div class="navbar-fixed">
        <nav class="gold-back">
            <div class="nav-wrapper row black-back">
                <a id="logo" href="./index.php" class="brand-logo left border-gold hide-on-med-and-up" title="Accueil"></a>
                <a id="logoLarge" href="./index.php" class="brand-logo left hide-on-small-only col m1" title="Accueil">
                    <img class="responsive-img border-gold" src="./assets/images/globals/logo_brut.png" alt="Be All in">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right" title="Menu"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <!--Proofs-->
                    <li>
                        <a class='dropdown-trigger text-20 dropNav secondFont' data-target='dropdownProof' title="Toutes les epreuves">Epreuves</a>

                        <ul id='dropdownProof' class='dropdown-content border-gold gold-back secondFont'>
                            <li class="gold-back"><a class="gold-back black-text text-contrast" href="./views/proofs/chartes.php?#" title="Fair-Play">Fair-Play</a></li>
                            <li class="divider"></li>
                            <div class="gold-back">
                                <li><a class="black-text text-contrast" href="./views/proofs/beer.php" title="Beer-Pong">Beer-Pong</a></li>
                                <li><a class="black-text text-contrast" href="./views/proofs/corn.php" title="Cornhole">Grenouille</a></li>
                                <li><a class="black-text text-contrast" href="./views/proofs/flip.php" title="Flip Cup">Flip cup</a></li>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a class='text-20 secondFont' href='./views/talk/talk.php' title="Trash Talk">Trash talk</a>
                    </li>
                    <li>
                        <a class='text-20 secondFont' href='./views/presentation/about.php' title="Be Olympiades"><i class="material-icons yellow-text">grade</i></a>
                    </li>
                    <li class="gold-back"><a href="./views/login/login.php" title="Compte"><i class="material-icons black-text text-contrast">person</i></a></li>
                    <li><a href="#" title="facebook"><img id="facebookLogo" class="" src="./assets/images/globals/facebook.png" alt=""></a></li>
                </ul>
            </div>
        </nav>

    </div>

</header>
<!--Mobile Navigation-->
<ul class="sidenav grey darken-4" id="mobile-demo">
    <li class="row gold-back">
        <div class="center-align secondFont text-20"><b>BE ALL IN</b></div>
        <div class="row">
            <img class="responsive-img col s6 offset-s3 circle" src="./assets/images/globals/logo_brut.png" alt="Les Olympiades">

            <div class="center-align secondFont text-20 col s12"><b>be olympiades</b></div>
        </div>
    </li>
    <li><a href="./index.php" class="white-text secondFont text-20" title="Accueil">Accueil<i class="material-icons white-text">home</i></a></li>
    <li><a href="./views/talk/talk.php" class="white-text secondFont text-20" title="Trash Talk">Trash talk<i class="material-icons red-text">whatshot</i></a></li>
    <li><a href="./views/presentation/about.php" class="white-text secondFont text-20" title="Trash Talk">Be Olympiades<i class="material-icons yellow-text">grade</i></a></li>
    <ul class="collapsible white-text">
        <li>
            <div class="collapsible-header gold-back row">
                <div class="col s12 valign-wrapper secondFont text-30 black-text text-contrast"><i class="material-icons">arrow_downward</i>Epreuves</div>
            </div>
            <div class="collapsible-body grey darken-3">
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-3 text-20 col s12 secondFont" href="./views/proofs/chartes.php?#" title="Fair-Play"><i class="tiny material-icons">description</i>    Fair-Play</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12 secondFont" href="./views/proofs/beer.php" title="Beer-Pong"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12 secondFont" href="./views/proofs/corn.php" title="Cornhole"><i class="tiny material-icons">golf_course</i>    Grenouille</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12 secondFont" href="./views/proofs/flip.php" title="Flip Cup"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li class="divider"></li>
    </ul>
    <li>
        <a href="./views/login/login.php" class="white-text secondFont text-20" title="Compte"><i class="material-icons white-text">person</i> Mon Compte</a>
    </li>
    <li class="divider"></li>
    <li>
        <a id="facebookSide" href="#" title="facebook"></a>
    </li>
</ul>
<main>


    <!--TIMER-->
    <h1 class="center-align secondFont text-25">Début des hostilités dans</h1>

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

    <section id="indexImage">
            <div id="filter-grey" class="white-text valign-wrapper row">
                <div class="col s12">
                    <!--FORM SUBSCRIPTION-->
                    <div class="center-align section">
                        <?php if ($_SESSION['connected'] == 'OK') { ?>
                            <a id="button-talk" class="border-5 secondFont yellow-text z-depth-5" href="./views/talk/talk.php" title="Trash Talk"><i class="material-icons red-text">whatshot</i> Trash Talk <i class="material-icons red-text">whatshot</i></a>
                        <?php } else {?>
                            <div class="section">
                                <a id="button-inscription" class="secondFont z-depth-5" href="./views/login/subscribe.php" title="Inscris toi">Inscription</a>
                            </div>
                            <div>
                                <a class="btn-small text-20 gold-back secondFont black-text text-contrast" href="./views/login/login.php" title="Se connecter">Déjà inscrit</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </section>

</main>

<!--BREAKING NEWS-->
<div class="ticker section" role="complementary">

    <div class="ticker-tip gold-back">
        <div class="ticker-tip-info valign-wrapper black-text text-contrast">
            <i class ="material-icons circle z-depth-5">info</i>
            <span>DERNIERE MINUTES<span>
        </div>
    </div>

    <div class="ticker-news">
    <span>
    <?php foreach ($tab_final as $news) {  ?>
      <span><?= $news ?></span><b class="red-text"> ||</b>
    <?php } ?>
    </div>

</div>
<!--COOKIES BANNER-->
<?php if (!$_COOKIE['accept'] && $_SESSION['connected'] != 'OK') {?>
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
