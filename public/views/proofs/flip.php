<?php include_once '../templates/header.php' ?>

<main>
    <div class="row valign-wrapper">
        <h1 class="secondFont text-8 center-align col s8 offset-s2">Flip-Cup</h1>
        <div id="btnReturn" class="col s2">
            <button class="gold-back black-back text-contrast" type="button" id="btnReturn" ><i class="material-icons">undo</i></button>
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
                    <p class="center-align white-text">3 manches gagnantes</p>
                </div>
                <div class="col s12 divider"></div>
                <div class="col s12">
                    <p class="white-text center-align">La première équipe qui finie son tour remporte la manche</p>
                    <div class="center-align">
                        <small class="white-text">Entre-deux : Départ simultané avec cul-sec</small>
                    </div>
                </div>
                <div class="col s12 black-back border-gold drink-rules">
                    <div class="center-align secondFont text-25 white-text">Et tu bois</div>
                    <div class="white-text">
                        <ul class="white-text">
                            <li>Lorsque c'est ton tour de jouer de la pichenette</li>
                            <li>Le nombre de goblets restant à l'équipe adverse</li>
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
                    src="https://www.youtube.com/embed/1EXQFPn0x2c"
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
                    <i class="material-icons">flag</i>Un tour
                </div>
                <div class="collapsible-body black-back white-text"><b>Le tour commence par un cul sec du premier joueur de chaque équipe</b>
                    <p class="white-text justify-text">
                        A l'aide d'une pichenette, chaque joueur doit retourner le gobelet sur la table, il doit faire au minimum un demi-tour et se reposer à l’<b>envers</b> sur la table
                    </p>
                    <p class="white-text justify-text">
                        Une fois le verre retouné, le joueur suivant peut se lancer à l'assault de sont cul-sec
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                    <i class="material-icons">gavel</i>Pénalités
                </div>
                <div class="collapsible-body black-back white-text">
                    <span>
                        Bien évidemment tout entrave au Fair-Play sera sanctionnait comme mentionné dans la Chartes de Bonne Conduite :
                        <a href="./chartes.php?#">ici</a> pour ceux qui ne l'auraient pas lu
                    </span>
                </div>
            </li>
            <li>
                <div class="collapsible-header gold-back text-contrast secondFont text-20 valign-wrapper">
                    <i class="material-icons">nature_people</i>Pour les cons
                </div>
                <div class="collapsible-body black-back white-text">
                    <span>
                        <p class="center-align white-text">On joue sur la table, pas sur ton cul</p>
                        <img class="responsive-img col s8 offset-s2 m6 offset-m3 l4 offset-l4" src="../../assets/images/proofs/flipcup.png" alt="Flip Cup">
                    </span>
                </div>
            </li>
        </ul>

    </div>
</main>


<?php include_once '../templates/footer.php' ?>
