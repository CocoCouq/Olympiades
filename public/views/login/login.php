<?php include_once '../../controller/c_login.php' ?>
<?php include_once '../templates/header.php' ?>

<main>
    <?php if ($_SESSION['connected'] != 'OK') { ?>
    <h1 class="center-align firstFont">Ici, on se connecte</h1>

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
            <h1 class="center-align secondFont">glOry hOle</h1>
            <section class="container black-back row border-2">
                <h2 class="col s8 offset-s2 center-align text-contrast gold-back border-gold z-depth-5"><?= $row_player->pseudo ?: '' ?></h2>

                <article class="col s4 offset-s1">
                    <blockquote class="white-text"><?= $row_player->description ?></blockquote>
                </article>

                <article class="col s5 offset-s1 gold-back border-5 z-depth-5">
                    <h3 class="center-align text-20 firstFont">
                        <?= $row_player->f_name ?> <?= substr($row_player->name, 0, 1) ?>.
                    </h3>
                </article>

                <article class="divider transparent"></article>

                <article class="row">
                    <div class="center-align text-25 black-text col s12 gold-back margin-t-20 text-contrast secondFont">Restes disponible</div>
                    <div class="red-text text-30 center-align col s12 gold-back text-contrast secondFont">&</div>
                    <div class="center-align col s12 gold-back">
                        <span class="red-text text-darken-2 text-30 text-contrast secondFont">Tiens toi prêt pour la grande aventure</span>
                    </div>
                </article>

                <article class="col s10 offset-s1 border-gold black-back margin-t-15 white-text">
                    <h4 class="flow-text">Email de contact : <?= $row_player->mail ?></h4>
                    <h5 class="flow-text">Téléphone de contact : <?= $row_player->phone ?></h5>
                </article>

                <article class="col s10 offset-s1 center-align margin-t-20 margin-b-10">
                    <form action="" method="post">
                        <button name="disconnection" class="btn red darken-4">Se déconnecter</button>
                    </form>
                </article>
            </section>
    <?php }
        else {
            echo 'Erreur de connection';
        }?>
</main>

<?php include_once '../templates/footer.php' ?>
