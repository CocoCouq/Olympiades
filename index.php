<?php include_once 'controller/c_index.php'?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/vendor/newsbanner.css">
    <title>Olympiades</title>
</head>
<body>
<header>
<!--NAVIGATION BAR-->
<div class="navbar-fixed">
<nav class="firstFont black-back">
    <div class="nav-wrapper">
        <div>
            <a href="" class="brand-logo"><img id="logo" class="responsive-img border-gold-round circle z-depth-5" src="assets/images/logo_brut.png" alt="Accueil"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!--Proofs-->
                <li>
                    <a class='dropdown-trigger text-20' href='#' data-target='dropdownProof'>Epreuves</a>

                    <ul id='dropdownProof' class='dropdown-content'>
                        <li><a href="views/proofs/chartes.php"><i class="tiny material-icons">description</i><small>CBC</small></a></li>
                        <li class="divider"></li>
                        <li><a href="views/proofs/beer.php">Beer-Pong</a></li>
                        <li><a href="views/proofs/corn.php">Cornhole</a></li>
                        <li><a href="views/proofs/flip.php">Flip cup</a></li>
                    </ul>
                </li>
                <li>
                    <a class='dropdown-trigger text-20' href='#' data-target='dropdownTrash'>Trash talk</a>

                    <ul id='dropdownTrash' class='dropdown-content'>
                        <li><a href="views/talk/index.php#WallOfFame">Wall of Fame</a></li>
                        <li class="divider"></li>
                        <li><a href="views/talk/index.php#players">Inscrits</a></li>
                    </ul>
                </li>
                <li class="gold-back"><a href="views/login/login.php"><i class="material-icons">person</i></a></li>
                <li><a href="#"><img class="margin-t-15" src="assets/images/facebook.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</nav>
</div>

</header>
<!--Mobile Navigation-->
<ul class="sidenav firstFont" id="mobile-demo">
    <li class="row gold-back">
        <div class="center-align secondFont text-20">BE ALL IN</div>
        <div class="row">
            <img class="responsive-img col s6 offset-s3" src="assets/images/logo.png" alt="">
        </div>
        <div class="center-align secondFont text-20">be olympiades</div>
    </li>
    <li><a href="#">Accueil</a></li>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons">local_bar</i>Epreuves</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10 side-items"><a class="grey-text text-20 col s12" href="views/proofs/chartes.php"><i class="tiny material-icons">description</i>    CBC</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="views/proofs/beer.php"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="views/proofs/corn.php"><i class="tiny material-icons">gps_fixed</i>    Cornhole</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="views/proofs/flip.php"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">forum</i>Trash talk</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10 side-items"><a class="red-text text-darken-2 text-20 col s12" href="views/talk/index.php#WallOfFame"><i class="tiny material-icons">whatshot</i>    Wall of Fame</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="views/talk/index.php#players"><i class="tiny material-icons">wc</i>    Inscrits</a></div>
            </div>
        </li>
        <li class="divider"></li>
    </ul>
    <li>
        <a href="views/login/login.php"><i class="material-icons">person</i> Mon Compte</a>
    </li>
    <li class="divider"></li>
    <li>
        <a id="facebookSide" href="#" title="facebook"></a>
    </li>
</ul>
<main>

    <!--TIMER-->
    <h1 class="center-align secondFont text-30">BECOME A LEGEND</h1>
    <div class="center-align secondFont text-20">début des hostilités dans :</div>

    <div id="clock" class="container row center-align thirdFont">
        <div id="clock1" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock2" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven bigText">:</div>
        <div id="clock3" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock4" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven bigText">:</div>
        <div id="clock5" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock6" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div class="oneElven bigText">:</div>
        <div id="clock7" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
        <div id="clock8" class="black-back border-gold white-text oneElven bigText clockNumbers">0</div>
    </div>

    <!--SUBSCRIBE MESSAGE-->
    <div class="center-align text-25 card red white-text"><?= $message ?></div>

    <section class="container section">

        <!--FORM SUBSCRIPTION-->
        <div class="center-align black-back section border-t-2">
            <a class="btn-large gold-back secondFont text-30 black-text text-contrast" href="views/login/subscribe.php">Inscription</a>
        </div>
        <!--HEADING CAROUSEL-->
        <div class="carousel carousel-slider center border-b-2">
            <div id="indexImage1" class="carousel-item white-text" href="#one!">
                <h2 class="black-text text-contrast secondFont">DES SALOPES</h2>
                <p class="text-contrast black-text">...</p>
            </div>
            <div id="indexImage2" class="carousel-item white-text" href="#two!">
                <h2 class="black-text text-contrast secondFont">DE L'AMBIGUITÉ</h2>
                <p class="text-contrast black-text">...</p>
            </div>
            <div id="indexImage3" class="carousel-item white-text" href="#three!">
                <h2 class="black-text text-contrast secondFont">DES REBONDISSEMENTS</h2>
                <p class="text-contrast black-text">...</p>
            </div>
            <div id="indexImage4" class="carousel-item white-text" href="#four!">
                <h2 class="black-text text-contrast secondFont">POUR LA GLOIRE</h2>
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

    <?php
    $i = 0;
    foreach ($tab as $row) {  ?>
      <span><?= $tab_news[$i]->start.$row->f_name.' '.$row->name.$tab_news[$i++]->end ?></span><b class="red-text"> ||</b>
    <?php } ?>

    </span>
    </div>
</div>

<footer class="white-text black-back hide-on-med-and-down">
    <div>
        © 2020 Olympic Society
        <a class="black-text text-lighten-4 right" href="https://github.com/CocoCouq" target="_blank">Code Source</a>
    </div>
</footer>

<script src="assets/vendor/materialize.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/console.js"></script>
</body>
</html>
