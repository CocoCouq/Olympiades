<?php
session_start();
if ($_SESSION['connected'] != 'OK')
    header('location:../../index.php');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/images/globals/favicon.png">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <title>Olympiades</title>
</head>
<body>
<header>
</header>
    <main>
        <section class="container black-back">
            <ul class="collapsible">
                <li class="black-back">
                    <div class="collapsible-header secondFont gold-back text-contrast text-30"><small class="padding-5"><sup>35€</sup></small> Menu Enfant</div>
                    <div class="collapsible-body">
                        <div class="row white-text">
                        <ul class="col s6">
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                        </ul>
                        <div class="col s6 center-align">
                            <p class="text-40 secondFont">35€</p>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="active black-back">
                    <div class="collapsible-header secondFont gold-back text-contrast text-30"><small class="padding-5"><sup>50€</sup></small> Menu Adulte</div>
                    <div class="collapsible-body white-text">
                        <div class="row">
                            <ul class="col s6">
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                            </ul>
                            <div class="col s6 center-align">
                                <p class="text-40 secondFont">50€</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="black-back">
                    <div class="collapsible-header secondFont gold-back text-contrast text-30"><small class="padding-5"><sup>80€</sup></small> Menu Gourmand</div>
                    <div class="collapsible-body white-text">
                        <div class="row">
                            <ul class="col s6">
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                            </ul>
                            <div class="col s6 center-align">
                                <p class="text-40 secondFont">80€</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="section">
            <div class="gold-back">
                <div class="black-back white-text">
                    <div class="container section">
                        <p class="center-align"><b class="text-30">Comment ça marche ?</b></p>
                        <ul>
                            <li>1. Cliquez sur le bouton en dessous</li>
                            <li><b>2. Remplis le montant de ton package</b></li>
                            <li>Donne ton nom et ton prénom </li>
                            <li class="divider"></li>
                            <li class="red-text">TU VEUX UTILISER <strong class="blue-text">LYDIA</strong></li>
                            <li>Une fois le formulaire remplis, cliques sur "Payer avec Lydia", ouvres ton application (sur ton super smartphone), tu pourras y accepter le paiement.</li>
                            <li class="divider"></li>
                            <li class="red-text">TU NE POSSÈDES PAS <strong class="blue-text">LYDIA</strong></li>
                            <li>Une fois le formulaire remplis, cliques sur "Payer par carte" et remplis les informations demandées.</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

            <div class="center-align section">
                <a id="btnPay" class="btn-large gold-back black-text text-contrast secondFont" href="#PaiementLinkService" title="Payer sa part" target="blank">
                    Payer son dut
                </a>
            </div>
        </section>

    </main>

<?php include_once '../templates/footer.php' ?>
