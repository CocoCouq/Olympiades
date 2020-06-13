<?php include_once '../../controllers/c_login.php' ?>
<?php include_once '../templates/header.php' ?>

<main>
    <?php if ($_SESSION['connected'] != 'OK') { ?>
    <h1 class="center-align secondFont text-30">Ici, on se connecte</h1>

    <section class="container black-back border-2 z-depth-2">
        <form class="section row" action="" method="post">
            <article class="input-field col s10 offset-s1 m6 offset-m3 margin-t-20">
                <input id="pwd1" placeholder="Ou email" type="text" class="validate white-text" name="login" value="<?= htmlspecialchars($_POST['login']) ?: '' ?>">
                <label for="pwd1">Pseudo</label>
                <span class="red-text"><?= $login_message ?: '' ?></span>
            </article>
            <article class="input-field col s10 offset-s1 m6 offset-m3 margin-t-20">
                <input id="pwd2" type="password" class="validate white-text" name="pwd">
                <label for="pwd2">Mot de passe</label>
                <span class="red-text"><?= $pwd_message ?: '' ?></span>
            </article>

            <article class="center-align col s12">
                <button id="btnAddPlayer" type="submit" class="btn gold-back black-text text-contrast secondFont" name="btnLogin">Se connecter</button>
            </article>
            <article class="col s10 offset-s1 center-align section">
            <a href="../../index.php" title="Retour accueil"><small>Pas encore de compte, inscris toi</small></a>
            </article>
        </form>
    </section>
    <?php
        }
        else if ($_SESSION['connected'] == 'OK') { ?>
            <h1 class="center-align secondFont">Mon Compte</h1>
            <?php if ($row_player->menu == null) { ?>
                <article class="center-align red darken-4 white-text">
                    <p class="text-20">
                        <b><i class="center-align"></i>Nous possédons actuellement à la vérification de ton paiement</b></p>
                    <p>
                        Cette alerte disparaitra lorsque nous aurons validé ton inscription
                    </p>
                    <p class="text-2">(Validation en moins de 24h)</p>
                    <p class="center-align text-20">
                        <b>En attendant viens sur le <a class="white-text" href="../talk/talk.php" title="Cliques !">Trash Talk <i class="material-icons">forum</i></a></b>
                    </p>
                </article>
            <?php } ?>

            <div class="center-align section hide-on-med-and-up">
                <div class=" center-align">
                    <a class="btn-large grey darken-3 valign-wrapper secondFont text-30" href="../talk/talk.php" title="Annonce toi"><i class="material-icons">touch_app</i> Chambres <i class="material-icons blue-text">forum</i></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6">
                    <div class="card gold-back">
                        <div class="card-content text-contrast">
                            <span class="card-title secondFont center-align"><?= $row_player->pseudo ?: '' ?> <small>(<?= $row_player->mail ?>)</small></span>

                            <div class="row valign-wrapper">
                                <div class="col s6">
                                    <?php if ($row_player->menu != null) { ?>
                                    <p class="center-align border-gold-round text-20 firstFont"><?= $row_player->menu == 1 ? 'Menu Enfant' : ($row_player->menu == 2 ? 'Menu Adulte' : 'Menu Gourmand') ?></p>
                                    <?php } else {?>
                                        <i class="material-icons large circle border-gold-round">person</i>
                                    <?php } ?>
                                </div>
                                <div class="col s6">
                                    <div class="padding-5">
                                        <?= $row_player->f_name ?> <?= substr($row_player->name, 0, 1) ?>.
                                    </div>
                                    <div class="padding-5">
                                        <?= $row_player->phone ?>
                                    </div>
                                </div>
                            </div>


                            <div class="center-align">
                               <strong class="text-20 padding-5 border-2">“<?= $row_player->description ?>“</strong>
                            </div>
                        </div>
                        <div class="card-action black-back valign-wrapper">
                            <form class="padding-5" action="" method="post">
                                <button name="disconnection" class="btn-large text-30 red darken-4 secondFont">Se déconnecter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section hide-on-small-only col m6">
                    <div class="card gold-back">
                        <div class="card-content black-back white-text">
                            <span class="card-title secondFont center-align">Viens faire jaser</span>
                            <div class="row valign-wrapper">
                                <div class="col s6">
                                    <i class="material-icons large circle border-gold-round black-text">whatshot</i>
                                </div>
                                <div class="col s6">
                                    <div class="padding-5">
                                        Montres tes ambitions...
                                    </div>
                                    <div class="padding-5">
                                        Impose avec ta prose !!!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="padding-5">
                                <a class="btn-large text-30 grey darken-3 valign-wrapper secondFont" href="../talk/talk.php" title="Passer à la Caisse">Chambres <i class="material-icons blue-text">forum</i></a>
                            </div>
                        </div>
                    </div>
            </div>


                <?php if ($row_player->menu == null) { ?>
                    <article class="center-align white-text">
                        <div class="text-20">
                            <b>Problème de paiement ?! C'est ici :</b>
                        </div>
                        <a class="blue-text text-lighten-3 text-30" href="../cart/cart.php" title="Paiement">Payer</a>
                    </article>
                <?php } ?>
    <?php }
        else {
            echo 'Erreur de connection';
        }?>
</main>

<?php include_once '../templates/footer.php' ?>
