<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/images/logo.png">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Olympiades</title>
</head>
<body>
<header>
    <!--NAVIGATION BAR-->
    <div class="navbar-fixed">
        <nav class="firstFont black-back">
            <div class="nav-wrapper">
                <div>
                    <a href="../../index.php" class="brand-logo"><img id="logo" class="responsive-img  border-gold-round gold-back circle z-depth-5" src="../../assets/images/logo_brut.png" alt="Accueil"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <!--Proofs-->
                        <li>
                            <a class='dropdown-trigger text-20' href='#' data-target='dropdownProof'>Epreuves</a>

                            <ul id='dropdownProof' class='dropdown-content'>
                                <li><a href="../proofs/chartes.php"><i class="tiny material-icons">description</i><small>CBC</small></a></li>
                                <li class="divider"></li>
                                <li><a href="../proofs/beer.php">Beer-Pong</a></li>
                                <li><a href="../proofs/corn.php">Cornhole</a></li>
                                <li><a href="../proofs/flip.php">Flip cup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class='dropdown-trigger text-20' href='#' data-target='dropdownTrash'>Trash talk</a>

                            <ul id='dropdownTrash' class='dropdown-content'>
                                <li><a href="../talk/index.php#WallOfFame">Wall of Fame</a></li>
                                <li class="divider"></li>
                                <li><a href="../talk/index.php#players">Inscrits</a></li>
                            </ul>
                        </li>
                        <li class="gold-back"><a href="../../views/login/login.php"><i class="material-icons">person</i></a></li>
                        <li><a href="#"><img class="margin-t-15" src="../../assets/images/facebook.png" alt=""></a></li>
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
            <img class="responsive-img col s6 offset-s3" src="../../assets/images/logo.png" alt="">
        </div>
    </li>
    <li><a href="../../index.php">Accueil</a></li>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons">local_bar</i>Epreuves</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10 side-items"><a class="grey-text text-20 col s12" href="../proofs/chartes.php"><i class="tiny material-icons">description</i>    CBC</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="../proofs/beer.php"><i class="tiny material-icons">local_drink</i>    Beer-Pong</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="../proofs/corn.php"><i class="tiny material-icons">gps_fixed</i>    Cornhole</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="../proofs/flip.php"><i class="tiny material-icons">hourglass_full</i>    Flip cup</a></div>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">forum</i>Trash talk</div>
            <div class="collapsible-body">
                <div class="row margin-b-d10 side-items"><a class="red-text text-darken-2 text-20 col s12" href="../talk/index.php#WallOfFame"><i class="tiny material-icons">whatshot</i>    Wall of Fame</a></div>
                <div class="row margin-b-d10 side-items"><a class="grey-text text-darken-2 text-20 col s12" href="../talk/index.php#players"><i class="tiny material-icons">wc</i>    Inscrits</a></div>
            </div>
        </li>
        <li class="divider"></li>
    </ul>
    <li>
        <a href="../../views/login/login.php"><i class="material-icons">person</i> Mon Compte</a>
    </li>
    <li class="divider"></li>
    <li>
        <a id="facebookSide" href="#" title="facebook">
        </a>
    </li>
</ul>
