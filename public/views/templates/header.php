<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/images/globals/logo_brut.png">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <title>Olympiades</title>
</head>
<body>
<header>
    <!--NAVIGATION BAR-->
    <div class="navbar-fixed">
        <nav class="gold-back">
            <div class="nav-wrapper row black-back">
                <a id="logo" href="../../index.php" class="brand-logo left" title="Accueil"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right" title="Menu"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <!--Proofs-->
                    <li>
                        <a class='dropdown-trigger text-20' href='#' data-target='dropdownProof' title="">Epreuves</a>

                        <ul id='dropdownProof' class='dropdown-content'>
                            <li><a href="../proofs/chartes.php" title="Fair-Play">Fair-Play</a></li>
                            <li class="divider"></li>
                            <li><a href="../proofs/beer.php" title="Beer-Pong">Beer-Pong</a></li>
                            <li><a href="../proofs/corn.php" title="Cornhole">Cornhole</a></li>
                            <li><a href="../proofs/flip.php" title="Flip Cup">Flip cup</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class='text-20 red-text' href='../../views/talk/talk.php' title="Trash Talk">Trash talk</a>
                    </li>
                    <li class="gold-back"><a href="../login/login.php" title="Compte"><i class="material-icons">person</i></a></li>
                    <li><a href="#" title="facebook"><img class="margin-t-15" src="../../assets/images/globals/facebook.png" alt=""></a></li>
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
            <img class="responsive-img col s6 offset-s3 circle" src="../../assets/images/globals/logo_brut.png" alt="Les Olympiades">

            <div class="center-align secondFont text-20 col s12">be olympiades</div>
        </div>
    </li>
    <li><a href="../../index.php" class="white-text" title="Accueil">Accueil<i class="material-icons white-text">home</i></a></li>
    <li><a href="../../views/talk/talk.php" class="red-text" title="Trash Talk">Trash talk<i class="material-icons red-text">whatshot</i></a></li>
    <ul class="collapsible white-text">
        <li>
            <div class="collapsible-header gold-back row">
                <div class="col s12 valign-wrapper secondFont text-30 black-text text-contrast"><i class="material-icons">arrow_downward</i>Epreuves</div>
            </div>
            <div class="collapsible-body grey darken-3">
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-3 text-20 col s12" href="../../views/proofs/chartes.php" title="Fair-Play"><i class="tiny material-icons">description</i>    Fair-Play</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="../../views/proofs/beer.php" title="Beer-Pong"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="../../views/proofs/corn.php" title="Cornhole"><i class="tiny material-icons">gps_fixed</i>    Cornhole</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-lighten-1 text-20 col s12" href="../../views/proofs/flip.php" title="Flip Cup"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li class="divider"></li>
    </ul>
    <li>
        <a href="../../views/login/login.php" class="white-text" title="Compte"><i class="material-icons white-text">person</i> Mon Compte</a>
    </li>
    <li class="divider"></li>
    <li>
        <a id="facebookSide" href="#" title="facebook"></a>
    </li>
</ul>
