<?php include_once '../templates/header.php' ?>

<main>
    <h1 class="center-align secondFont text-30">INSCRIPTION</h1>
    <div class="container section">

<form class="black-back border-2 z-depth-2" action="../../index.php" method="post">
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

<?php include_once '../templates/footer.php' ?>
