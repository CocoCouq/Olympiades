<?php session_start() ?>
<?php include_once '../templates/header.php' ?>

<!--BOOT PAGE-->
<main id="bootPage" class="gold-back <?= $_SESSION['message'] != '' ? 'hide' : '' ?>">
    <h1 class="center-align secondFont black-text text-contrast"><strong>Attention</strong></h1>

    <article class="black-back">
        <p class="text-20 center-align white-text">
            Après ton inscription, on va te demander de payer ta participation
        </p>
        <p class="center-align white-text secondFont text-20">
            Assures-toi bien d'avoir ton larfeuille ma caille
        </p>
        <p class="row">
            <img class="responsive-img col s4 offset-s1" src="../../assets/images/cart/lydia.png" alt="Lydia">
            <img class="responsive-img col s5 offset-s1" src="../../assets/images/cart/cards.png" alt="Lydia">
        </p>

        <div class="border-gold">

            <p class="center-align secondFont text-40 white-text margin-b-d10"><i class="material-icons">local_bar</i> 3 Offres <i class="material-icons">local_bar</i></p>
            <!-- Modal Trigger -->
            <div class="center-align section">
                <a class="btn-large modal-trigger gold-back black-text secondFont text-40 text-contrast" href="#modalPrices">VOIR LES MENUS <i class="material-icons">touch_app</i></a>
            </div>

        </div>
        <!-- Modal Structure -->
        <div id="modalPrices" class="modal">
            <div class="modal-content">
                <h4 class="center-align text-25 secondFont">Envie d'en découdre ?</h4>
                <div class="row">
                    <div class="col s12 m4 center-align">
                        <h6 class="firstFont text-30">Menu Enfant</h6>
                        <h5 class="secondFont">35€</h5>
                        <ul>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                        </ul>
                    </div>
                    <div class="col s12 m4 center-align">
                        <h6 class="firstFont text-30">Menu Adulte</h6>
                        <h5 class="secondFont">50€</h5>
                        <ul>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                        </ul>
                    </div>
                    <div class="col s12 m4 center-align">
                        <h6 class="firstFont text-30">Menu Gourmand</h6>
                        <h5 class="center-align secondFont">80€</h5>
                        <ul>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                            <li>Lorem ipsum.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="center-align section">
            <button id="showFormBtn" class="waves-effect blue-grey darken-4 waves-light btn-large secondFont text-30 margin-b-10">
                M'inscrire et payer
            </button>
        </div>
    </article>
</main>

<!--FORM-->
<main id="mainForm" class="<?= $_SESSION['message'] == '' ? 'hide' : '' ?>">
    <h1 class="center-align secondFont text-30">INSCRIPTION</h1>
    <div class="container section">

        <!--SUBSCRIBE MESSAGE-->
        <div id="subscribeBannerMessage" class="center-align text-25 text-contrast"><?= $_SESSION['message'] ?></div>
<form class="black-back border-2 z-depth-2" action="../../controllers/c_subscribe.php" method="post">
        <section class="row">
            <article class="input-field col s12 m6">
                <input id="nameInput" type="text" class="validate white-text" name="name">
                <label for="nameInput">Nom</label>
                <span id="missName" class="red-text"></span>
            </article>
            <article class="input-field col s12 m6">
                <input id="fnameInput" type="text" class="validate white-text" name="f_name">
                <label for="fnameInput">Prénom</label>
                <span id="missFName" class="red-text"></span>
            </article>
            <article class="input-field col s12 m6 offset-m3 section">
                <input placeholder="Celui derrière le maillot" id="pseudoInput" type="text" class="validate white-text" name="pseudo">
                <label for="pseudoInput">Ton pseudo</label>
                <span id="missPseudo" class="red-text"></span>
            </article>
            <article class="input-field col s12 m6 margin-t-20">
                <input id="mailInput" type="email" class="validate white-text" name="mail">
                <label for="mailInput">Ton email</label>
                <span id="missMail" class="red-text"></span>
            </article>
            <article class="input-field col s12 m6 margin-t-20">
                <input id="phoneInput" type="text" class="validate white-text" name="phone">
                <label for="phoneInput">Ton numéro</label>
                <span id="missPhone" class="red-text"></span>
            </article>

            <article class="input-field col s12 m6 offset-m3 margin-t-20">
                <input id="pwd1" type="password" class="validate white-text" name="pwd1">
                <label for="pwd1">Mot de passe</label>
            </article>
            <article class="input-field col s12 m6 offset-m3 margin-t-20">
                <input id="pwd2" type="password" class="validate white-text" name="pwd2">
                <label for="pwd2">Confirmes ton mot de passe</label>
                <span id="missPwd" class="red-text"></span>
            </article>

            <article class="input-field col s12 m6 offset-m3 margin-t-20">
                <input id="description" placeholder="Celui pour la pub Nike" type="text" class="validate white-text" name="description">
                <label for="description">Ton slogan</label>
                <span id="missDesc" class="red-text"></span>
            </article>

        </section>

    <div class="row">
        <label class="col s12 center-align">
            <input id="accept" type="checkbox" name="accept">
            <span>Accepte que mes infos soit utilisées à des fins festives</span>
            <p id="missAccept" class="red-text"></p>
        </label>
    </div>

    <div class="center-align section">
        <button id="btnAddPlayer" type="submit" class="btn gold-back black-text text-contrast secondFont" name="btnAddPlayer">Reserver ma place</button>
    </div>
</form>
    </div>
</main>


<script>
    if (document.getElementById('showFormBtn')) {
        document.getElementById('showFormBtn').addEventListener('click', function (event) {
            document.getElementById('mainForm').classList.remove('hide')
            document.getElementById('bootPage').classList.add('hide')
        })
    }
</script>


<?php include_once '../templates/footer.php' ?>

