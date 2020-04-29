<?php include_once '../../controller/c_admin.php'?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/vendor/material_icons.css">
    <link rel="stylesheet" href="../../assets/vendor/materialize.css">
    <title>Administrateur</title>
</head>
<body>
    <main>
        <?php if ($_SESSION['auth'] == 'OK' && $_SESSION['user'] == 'Admin') { ?>
        <section class="row blue-grey darken-3 white-text z-depth-2">
            <div class="col s2 m1 center-align">
                <form action="" method="post">
                    <button class="waves-effect waves-green btn-flat red-text" type="submit" name="disconnection">
                        Logout
                    </button>
                </form>
            </div>
            <div class="col s2 m1 center-align">
                <a class="btn" href="./index.php"><i class="material-icons">refresh</i></a>
            </div>
            <div class="col s2 m1 center-align">
                <a class="btn" href="../../index.php" target="_blank">Site</a>
            </div>
            <h1 class="col s12 center-align">Gestion des joueurs</h1>
        </section>

            <div>
            </div>

        <p class="row flow-text center-align red white-text z-depth-2"><?= $message ?></p>

        <table class="striped responsive-table">
            <thead class="blue-grey darken-3 white-text">
            <tr>
                <td>Nº</td>
                <td>
                    <label for="name">
                        <input id="name" type="text" class="validate white-text" value="Nom" disabled>
                    </label>
                </td>
                <td>
                    <label for="fname">
                        <input id="fname" type="text" class="validate white-text" value="Prénom" disabled>
                    </label>
                </td>
                <td>
                    <label for="pseudo">
                        <input id="pseudo" type="text" class="validate white-text" value="Pseudo" disabled>
                    </label>
                </td>
                <td>
                    <label for="mail">
                        <input id="mail" type="text" class="validate white-text" value="Mail" disabled>
                    </label>
                </td>
                <td>
                    <label for="phone">
                        <input id="phone" type="text" class="validate white-text" value="Téléphone" disabled>
                    </label>
                </td>
                <td class="flow-text center-align">
                    Modifier
                </td>
                <td class="flow-text center-align">
                    Supprimer
                </td>

            </tr>
            </thead>

            <tbody class="blue-grey lighten-4">
            <?php
                $i = 0;
                foreach ($tab as $row) { ?>
                <tr>
                    <form action="" method="post">
                        <td><?= ++$i ?></td>
                        <td>
                            <label for="nameInput">
                                <input id="nameInput" type="text" class="validate" name="name" value="<?= $row->name ?>">
                            </label>
                        </td>
                        <td>
                            <label for="fnameInput">
                                <input id="fnameInput" type="text" class="validate" name="f_name" value="<?= $row->f_name ?>">
                            </label>
                        </td>
                        <td>
                            <label for="pseudoInput">
                                <input id="pseudoInput" type="text" class="validate" name="pseudo" value="<?= $row->pseudo ?>">
                            </label>
                        </td>
                        <td>
                            <label for="mailInput">
                                <input id="mailInput" type="email" class="validate" name="mail" value="<?= $row->mail ?>">
                            </label>
                        </td>
                        <td>
                            <label for="phoneInput">
                                <input id="phoneInput" type="text" class="validate" name="phone" value="<?= $row->phone ?>">
                            </label>
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                        </td>
                        <td>
                            <button class="btn blue" type="submit" name="btnEdit">
                                <i class="material-icons right">edit</i>
                            </button>
                        </td>
                        <td>
                            <!-- Modal Trigger -->
                            <a class="waves-effect waves-light btn modal-trigger red" href="#modal<?= $row->id ?>">
                                <i class="material-icons right">delete</i>
                            </a>

                            <!-- Modal Structure -->
                            <div id="modal<?= $row->id ?>" class="modal">
                                <div class="modal-content center-align">
                                    <h4><?= $row->pseudo ?></h4>
                                    <p>Souhaites tu réellement supprimer <?= $row->f_name ?> <?= $row->name ?> ?</p>
                                    <strong class="red-text">Cette action est irréverssible</strong>
                                </div>
                                <div class="modal-footer">
                                    <button class="waves-effect waves-green btn-flat red-text" type="submit" name="btnDelete">
                                        Supprimer
                                    </button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
                                </div>
                            </div>
                        </td>
                    </form>
                </tr>
            <?php } ?>
            </tbody>
        </table>
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
    <script src="../../assets/vendor/materialize.js"></script>
    <script src="../../assets/js/admin.js"></script>
</body>
</html>
