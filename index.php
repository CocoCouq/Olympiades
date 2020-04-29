<?php include_once 'controller/c_index.php'?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        <div class="row">
            <a href="" class="brand-logo"><img id="logo" class="responsive-img" src="assets/images/logo.png" alt="Accueil"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="black-text text-25" href="views/proofs.php">Epreuves</a></li>
                <li><a class="black-text text-25" href="views/archives.php">Archives</a></li>
                <li><a href="#"><img class="margin-t-15" src="assets/images/facebook.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</nav>
</div>

</header>
<!--Mobile Navigation-->
<ul class="sidenav firstFont" id="mobile-demo">
    <li class="row">
        <div class="center-align secondFont">Le combat des héros</div>
        <div class="row">
        <img class="responsive-img col s4 offset-s4" src="assets/images/logo.png" alt="">
        </div>
    </li>
    <li class="divider"></li>
    <li><a href="#">Accueil</a></li>
    <li><a href="views/proofs.php">Epreuves</a></li>
    <li><a href="views/archives.php">Archives</a></li>
    <li class="divider"></li>
    <li class="row">
        <a id="facebookSide" class="col s3" href="#" title="facebook">
        </a>
    </li>
</ul>
<main>

    <!--TIMER-->
    <h1 class="center-align secondFont flow-text">Ca commence dans</h1>

    <div id="clock" class="container row center-align firstFont">
        <div id="clock1" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div id="clock2" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div class="oneElven bigText oneElven">:</div>
        <div id="clock3" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div id="clock4" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div class="oneElven bigText">:</div>
        <div id="clock5" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div id="clock6" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div class="col s1 bigText">:</div>
        <div id="clock7" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
        <div id="clock8" class="white oneElven border-5 bigText z-depth-1 clockNumbers">0</div>
    </div>

    <!--SUBSCRIBE MESSAGE-->
    <div class="center-align text-25 card red white-text"><?= $message ?></div>

    <section class="container section">
        <!--HEADING CAROUSEL-->
        <div class="carousel carousel-slider center border-t-5">
            <div class="carousel-fixed-item center firstFont white-text">
                Texte Permanent
            </div>
            <div id="indexImage1" class="carousel-item white-text" href="#one!">
                <h2>First Panel</h2>
                <p class="white-text">This is your first panel</p>
            </div>
            <div id="indexImage2" class="carousel-item white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
            </div>
            <div id="indexImage3" class="carousel-item white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
            <div id="indexImage4" class="carousel-item white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div>

        <!--FORM MODAL-->
        <div class="center-align white section">
            <!-- Modal Trigger -->
            <a class="btn-large modal-trigger blue secondFont text-25" href="#modal1">Inscription</a>

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

        <!--TABLE PLAYERS-->
        <div class="border-b-5 blueTransparent">
            <table class="centered striped responsive-table">
                <thead>
                <tr class="secondFont">
                    <th class="flow-text">Nom</th>
                    <th class="flow-text">Appelez le</th>
                </tr>
                </thead>

                <tbody class="firstFont">
                <?php foreach ($tab as $row) { ?>
                <tr>
                    <td class="flow-text"><?= $row->f_name ?> <?= substr($row->name, 0, 1) ?>.</td>
                    <td class="flow-text"><?= $row->pseudo ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

</main>



<footer class="white hide-on-med-and-down">
    <div class="container">
        © 2020 Copyright
        <a class="grey-text text-lighten-4 right" href="#GitHubCoco">Code Source</a>
    </div>
</footer>

<script src="assets/vendor/materialize.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/form.js"></script>
<script src="assets/js/console.js"></script>
</body>
</html>
