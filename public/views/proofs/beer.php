<?php include_once '../templates/header.php' ?>

<main>
    <div class="row valign-wrapper">
        <h1 class="secondFont text-8 center-align col s8 offset-s2">Beer-Pong</h1>
        <div id="btnReturn" class="col s2">
            <button class="gold-back btn black-text text-contrast" type="button" id="btnReturn" ><i class="material-icons">undo</i></button>
        </div>
    </div>
    <ul class="collapsible popout">
        <li>
            <div class="collapsible-header gold-back secondFont text-contrast text-20 valign-wrapper">
                <i class="material-icons">touch_app</i>L'essentiel
            </div>
            <div class="collapsible-body black-back white-text row">
                <div class="col s4">
                    <p class="center-align white-text">Règles maison</p>
                    <p class="center-align white-text"><i class="tiny material-icons">info</i></p>
                </div>
                <div class="col s7 offset-s1">
                    <p class="center-align white-text">3 joueurs par équipe</p>
                    <p class="center-align white-text">1 balle par joueur</p>
                </div>
                <div class="col s12 divider"></div>
                <div class="col s12">
                    <p class="white-text center-align">10 gobelets par équipe - Balle à terre, balle perdue</p>
                    <b class="white-text">3 balles dans le même gobelet donne la victoire immédiate</b><br>
                    <div class="center-align">
                        <small class="white-text">Entre-deux : Eyes to Eyes</small>
                    </div>
                </div>
                <div class="col s12 black-back border-gold drink-rules">
                    <div class="center-align secondFont text-25 white-text">Et tu bois</div>
                    <div class="white-text">
                        <ul class="white-text">
                            <li>1 fois si ton coude dépasse la table</li>
                            <li>1 fois lorsque la balle tombe dans un gobelet</li>
                            <li>Le nombre de goblets restant à l'équipe adverse une fois la partie finie</li>
                        </ul>
                    </div>
                </div>
            </div>


        </li>
    </ul>

    <div class="width-collapsible">


        <div class="row">
            <iframe class="col s12 gold-back"
                    width="653" height="367"
                    src="https://www.youtube.com/embed/Yvb5v5A4r64"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
            >
            </iframe>
        </div>
    </div>


        <div class="col s12">
            <ul class="collapsible popout">

                <li>
                    <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                        <i class="material-icons">explore</i>Island
                    </div>
                    <div class="collapsible-body black-back white-text">
                        <span>Lorsque 1 verre est séparé d’au moins 2 verres collés, ce verre est nommé "Island". Si balle atterit dans l’island : 2 gobelets en moins (dont l'island). <b class="white-text"> Si la balle tombe dans un autre gobelet, aucun verre n'est retiré </b> </span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                        <i class="material-icons">flash_on</i>Electricité
                    </div>
                    <div class="collapsible-body black-back white-text">
                        <span>La balle rebondie sur un verre et rentre dans un autre, les 2 verres doivent être retirés</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                        <i class="material-icons">more_horiz</i>Remaniement
                    </div>
                    <div class="collapsible-body black-back white-text">
                        <span>1 par partie et par équipe</span>
                        <p class="white-text justify-text">
                            Les formes autorisées sont : Ligne, Losange, Triangle. <b class="white-text"> La demande doit être formulée au début du tour </b>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                        <i class="material-icons">smoke_free</i>Rédemption
                    </div>
                    <div class="collapsible-body black-back white-text">
                        <span>Avant de finir la partie, l'équipe ne possèdant plus de gobelets peut contrer avec le nombre de balles lancées par l'équipe adverse au tour précédent. Si le contre rentre, je lanceur peut relancer jusqu'à l'échec ou la Rédemption</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                        <i class="material-icons">bug_report</i>Miyagi
                    </div>
                    <div class="collapsible-body black-back white-text">
                        <span>Si la balle reste sur la table, possibilité de l’équipe qui a tiré de la récupérer, et de la rejouer <b>main faible</b> ou avec <b>tricks</b></span>
                    </div>
                </li>
            </ul>

        </div>


</main>


<?php include_once '../templates/footer.php' ?>
