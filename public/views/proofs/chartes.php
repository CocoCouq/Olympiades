<?php include_once '../templates/header.php' ?>

<main>
    <div class="row valign-wrapper">
        <h1 class="secondFont text-5 center-align col s8 offset-s2">Chartes de bonne conduite</h1>
        <div id="btnReturn" class="col s2">
            <button class="gold-back black-text text-contrast btn" type="button" id="btnReturn" ><i class="material-icons">undo</i></button>
        </div>
    </div>
    <div class="container">
    <ul class="collection border-2 z-depth-2 white-text">
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">favorite</i>
            <div class="secondFont text-20">Fair-Play</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Le fair-play, le respect des règles et des compétiteurs adverses doivent être respectés tout au long de l’événement
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">supervisor_account</i>
            <div class="secondFont text-20">Team Spirit</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Toujours boire en équipe, les Olympiades se vivent et se gagnent en team. Alors on attend le lendemain critiquer son partenaire
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">import_export</i>
            <div class="secondFont text-20">Défaillance d'un membre</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Si un membre de l’équipe fait une pause (vomi technique, coma ou juste aller chercher une brochette), ses coéquipiers peuvent et doivent le remplacer, aussi bien dans le jeu que dans la boisson
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">error_outline</i>
            <div class="secondFont text-20">Faute de jeu</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Le fautif se verra attribuer un shooter d’absinthe (2cl). Seul celui qui a commis la faute est concerné. Aucune négociation ne sera tolérée
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">flag</i>
            <div class="secondFont text-20">Fin de manche</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                CUL-SEC pour tous les membres de l’équipe perdante, sous le regard méprisant et les moqueries de l’équipe gagnante
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">search</i>
            <div class="secondFont text-20">Litiges</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Les litiges sont soumis à un vote. Toutes les personnes, même extérieure à la partie, peuvent voter si les équipes le demandent
            </p>
        </li>
        <li class="collection-item avatar black-back">
            <i class="material-icons circle gold-back z-depth-5 black-text">monetization_on</i>
            <div class="secondFont text-20">Victoire finale</div>
            <p class="justify-text margin-t-15 grey-text text-lighten-1">
                Les vainqueurs du tournoi se verront dans l’obligation d’ajouter leurs noms au trophée, dans un délai de 10 jours après la compétition.
            </p>
            <div class="justify-text grey-text text-lighten-1">
                Ainsi qu’exhiber fièrement ce trophée devant sa famille, cercle d’amis proche, collègues, animaux de compagnie, dépositaire de l’autorité publique si nécessaire
                <div><small class="red-text">Il est cependant interdit de dormir nu en sa compagnie</small></div>
            </div>
            <div class="secondary-content"><i class="material-icons yellow-text">grade</i></div>
        </li>
    </ul>
    </div>

    <!--FAKE FORM-->
    <form class="center-align section" action="#">
        <!-- Modal Trigger -->
        <a class="btn modal-trigger gold-back secondFont black-text" href="#modal1">Suggerer une regle</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content">
                <h3 class="text-20">Proposer une règle</h3>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Qui es-tu ?</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea" class="materialize-textarea"></textarea>
                        <label for="textarea">Que proposes-tu ?</label>
                    </div>
                </div>
                <button id="fakeSubmit" type="submit" class="modal-close waves-effect waves-green btn-flat right">Proposer</button>
            </div>
        </div>
    </form>

</main>

<?php include_once '../templates/footer.php' ?>
