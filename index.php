<?php include_once 'controller/c_index.php'?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Olympiades</title>
</head>
<body>
<header>
<!--NAVIGATION BAR-->
<div class="navbar-fixed">
<nav class="white firstFont">
    <div class="nav-wrapper">
        <div>
            <a href="" class="brand-logo"><img id="logo" class="responsive-img circle" src="assets/images/logo_nav.png" alt="Accueil"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!--Proofs-->
                <li>
                    <a class='dropdown-trigger black-text text-20' href='#' data-target='dropdownProof'>Epreuves</a>

                    <ul id='dropdownProof' class='dropdown-content'>
                        <li><a href="views/proofs/chartes.php"><i class="tiny material-icons">description</i><small>CBC</small></a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Beer-Pong</a></li>
                        <li><a href="#!">Cornhole</a></li>
                        <li><a href="#!">Flip cup</a></li>
                    </ul>
                </li>
                <li>
                    <a class='dropdown-trigger black-text text-20' href='#' data-target='dropdownTrash'>Trash talk</a>

                    <ul id='dropdownTrash' class='dropdown-content'>
                        <li><a href="#!">Wall of Fame</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Inscrits</a></li>
                    </ul>
                </li>
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
        <div class="center-align secondFont text-20">LE COMBAT DES HÉROS</div>
        <div class="row">
            <img class="responsive-img col s6 offset-s3" src="assets/images/logo.png" alt="">
        </div>
    </li>
    <li><a href="#">Accueil</a></li>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons">local_bar</i>Epreuves</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10"><a class="grey-text text-20 col s12" href="views/proofs/chartes.php"><i class="tiny material-icons">description</i>    CBC</a></div>
                <div class="row margin-b-d10"><a class="grey-text text-darken-2 text-20 col s12" href="#"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10"><a class="grey-text text-darken-2 text-20 col s12" href="#"><i class="tiny material-icons">gps_fixed</i>    Cornhole</a></div>
                <div class="row margin-b-d10"><a class="grey-text text-darken-2 text-20 col s12" href="#"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">forum</i>Trash talk</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10"><a class="red-text text-darken-2 text-20 col s12" href="#"><i class="tiny material-icons">whatshot</i>    Wall of Fame</a></div>
                <div class="row margin-b-d10"><a class="grey-text text-darken-2 text-20 col s12" href="#"><i class="tiny material-icons">wc</i>    Inscrits</a></div>
            </div>
        </li>
    </ul>
    <li class="row">
        <a id="facebookSide" class="col s3" href="#" title="facebook">
        </a>
    </li>
</ul>
<main>

    <!--TIMER-->
    <h1 class="center-align secondFont text-30">PORTES TES COUILLES</h1>
    <div class="center-align secondFont text-20">début des hostilités dans :</div>

    <div id="clock" class="container row center-align thirdFont">
        <div id="clock1" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div id="clock2" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div class="oneElven bigText oneElven">:</div>
        <div id="clock3" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div id="clock4" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div class="oneElven bigText">:</div>
        <div id="clock5" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div id="clock6" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div class="col s1 bigText">:</div>
        <div id="clock7" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
        <div id="clock8" class="gold-back oneElven bigText border-2 clockNumbers">0</div>
    </div>

    <!--SUBSCRIBE MESSAGE-->
    <div class="center-align text-25 card red white-text"><?= $message ?></div>

    <section class="container section">
        <!--HEADING CAROUSEL-->
        <div class="carousel carousel-slider center border-t-5">
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

        <!--FORM MODAL-->
        <div class="center-align white section border-b-5">
            <!-- Modal Trigger -->
            <a class="btn-large modal-trigger gold-back secondFont text-30 black-text" href="#modal1">Inscription</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <form action="" method="post">
                    <div class="modal-content">
                        <h3 class="titleText secondFont">Inscription</h3>
                        <section class="row">
                            <article class="input-field col s12 m6">
                                <input id="nameInput" type="text" class="validate" name="name">
                                <label for="nameInput">Nom</label>
                                <span id="missName" class="red-text"></span>
                            </article>
                            <article class="input-field col s12 m6">
                                <input id="fnameInput" type="text" class="validate" name="f_name">
                                <label for="fnameInput">Prénom</label>
                                <span id="missFName" class="red-text"></span>
                            </article>
                            <article class="input-field col s12 m6 offset-m3 section">
                                <input placeholder="Celui derrière le maillot" id="pseudoInput" type="text" class="validate" name="pseudo">
                                <label for="pseudoInput">Ton pseudo</label>
                                <span id="missPseudo" class="red-text"></span>
                            </article>
                            <article class="input-field col s12 m6 margin-t-20">
                                <input id="mailInput" type="email" class="validate" name="mail">
                                <label for="mailInput">Ton email</label>
                                <span id="missMail" class="red-text"></span>
                            </article>
                            <article class="input-field col s12 m6 margin-t-20">
                                <input id="phoneInput" type="text" class="validate" name="phone">
                                <label for="phoneInput">Ton numéro</label>
                                <span id="missPhone" class="red-text"></span>
                            </article>
                        </section>
                    </div>

                    <div class="row">
                        <label class="col s10 offset-s1">
                            <input id="accept" type="checkbox" name="accept">
                            <span>Accepte que mes infos soit utilisées à des fins festives</span>
                        </label>
                        <span id="missAccept" class="red-text"></span>
                    </div>

                    <div class="section">
                        <button id="btnAddPlayer" type="submit" class="btn blue" name="btnAddPlayer">M'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
        <!--END FORM-->
    </section>

</main>



<footer class="white hide-on-med-and-down">
    <div>
        © 2020 Copyright
        <a class="grey-text text-lighten-4 right" href="https://github.com/CocoCouq" target="_blank">Code Source</a>
    </div>
</footer>

<script src="assets/vendor/materialize.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/form.js"></script>
<script src="assets/js/console.js"></script>
</body>
</html>
