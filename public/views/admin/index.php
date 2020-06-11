<?php include_once '../../controllers/c_admin.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <title>Administrateur</title>
</head>
<body>
    <main>
        <?php if ($_SESSION['auth'] == 'OK' && $_SESSION['user'] == 'Admin') { ?>
        <section class="row blue-grey darken-3 white-text z-depth-2">
            <div class="col s3 center-align">
                <form action="" method="post">
                    <button class="waves-effect waves-green btn-flat red-text" type="submit" name="disconnection">
                        Logout
                    </button>
                </form>
            </div>
            <div class="col s3 center-align">
                <a class="btn" href="./index.php"><i class="material-icons">refresh</i></a>
            </div>
            <div class="col s3 center-align">
                <a class="btn" href="../../index.php" target="_blank">Site</a>
            </div>
            <div class="col s3 center-align">
                <a class="btn" href="./message.php"><i class="material-icons">mail</i></a>
            </div>
            <h1 class="col s12 center-align">Gestion des joueurs</h1>
        </section>

            <p class="row flow-text center-align red white-text z-depth-2"><?= $message ?></p>

            <div class="center-align section">
                <a class="btn-large red text-30" href="./valid_pay.php" title="Verifier les paiements"><i class="material-icons green-text">attach_money</i> Gérer les paiements <i class="material-icons green-text">attach_money</i></a>
            </div>
            <div class="container center-align">
                <div>
                    <a
                        href="mailto:<?php foreach ($tab as $user) { ?><?= $user->id != 1 ? $user->mail.',' : '' ?><?php } ?>?subject=OLYMPIADES%20:%20INFORMATIONS"
                        target="blank"
                        class="btn"
                    >
                        Mail groupé
                    </a>
                    <button class="btn" id="copyNum">
                        Copier les 06
                    </button>
                </div>
            </div>
            <div class="row">
                <?php foreach ($tab as $row) { ?>

                <div class="col s6 m4 l3">
                    <form action="" method="post">
                    <div class="card blue-grey darken-1">

                        <div class="card-content white-text">
                            <label for="nameInput<?= $row->id ?>">
                                <input id="nameInput<?= $row->id ?>" type="text" class="validate" name="name" value="<?= $row->name ?>">
                            </label>

                            <label for="fnameInput<?= $row->id ?>">
                                <input id="fnameInput<?= $row->id ?>" type="text" class="validate" name="f_name" value="<?= $row->f_name ?>">
                            </label>

                            <label for="pseudoInput<?= $row->id ?>">
                                <input id="pseudoInput<?= $row->id ?>" type="text" class="validate" name="pseudo" value="<?= $row->pseudo ?>">
                            </label>

                            <label for="mailInput<?= $row->id ?>">
                                <input id="mailInput<?= $row->id ?>" type="email" class="validate" name="mail" value="<?= $row->mail ?>">
                            </label>

                            <label for="phoneInput<?= $row->id ?>">
                                <input id="phoneInput<?= $row->id ?>" type="text" class="validate" name="phone" value="<?= $row->phone ?>">
                            </label>

                            <input type="text" name="id" value="<?= $row->id ?>">
                        </div>

                        <div class="card-action center-align">
                            <button class="btn-flat blue-text" type="submit" name="btnEdit">
                                <i class="material-icons right">edit</i>
                            </button>

                            <!-- Modal Trigger -->
                            <a class="waves-effect waves-light btn-flat modal-trigger red-text" href="#modal<?= $row->id ?>">
                                <i class="material-icons right">delete</i>
                            </a>

                            <!-- Modal Structure -->
                            <div id="modal<?= $row->id ?>" class="modal">
                                <div class="modal-content center-align">
                                    <h4><?= $row->pseudo ?></h4>
                                    <p>Souhaites tu réellement supprimer <?= $row->f_name ?> <?= $row->name ?> ?</p>
                                    <strong class="red-text">Cette action est irréverssible et supprimera tous ses messages dans le chat</strong>
                                </div>
                                <div class="modal-footer">
                                    <button class="waves-effect waves-green btn-flat red-text" type="submit" name="btnDelete">
                                        Supprimer
                                    </button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>

                <?php } ?>
                <textarea id="toCopy"><?php foreach ($tab as $user) { ?><?= $user->id != 1 ? $user->phone.',' : '' ?><?php } ?></textarea>
            </div>

        <?php }else{ ?>
            <h1 class="center-align">Zone réservé aux employés</h1>

            <section class="blue-grey darken-4 container z-depth-2">
                <form class="row section" action="" method="post">
                    <div class="input-field col s10 offset-s1 m6 offset-m3">
                        <input id="login" type="text" class="validate white-text" name="login">
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s10 offset-s1 m6 offset-m3">
                        <input id="password" type="password" class="validate white-text" name="password">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="col s12 center-align">
                        <button class="btn blue" type="submit" name="btnLogin">
                            Se connecter
                        </button>
                    </div>
                </form>
            </section>
        <?php } ?>
    </main>

<?php include_once '../templates/footer.php' ?>
