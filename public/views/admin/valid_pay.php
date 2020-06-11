<?php include_once '../../controllers/c_pay.php' ?>
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
    <section class="row blue-grey darken-3 white-text z-depth-2">
        <div class="col s3 center-align">
            <form action="./index.php" method="post">
                <button class="waves-effect waves-green btn-flat red-text" type="submit" name="disconnection">
                    Logout
                </button>
            </form>
        </div>
        <div class="col s3 center-align">
            <a class="btn" href="./valid_pay.php"><i class="material-icons">refresh</i></a>
        </div>
        <div class="col s3 center-align">
            <a class="btn" href="#cagnotte" target="_blank"><i class="material-icons">find_in_page</i></a>
        </div>
        <div class="col s3 center-align">
            <a class="btn" href="./index.php"><i class="material-icons">home</i></a>
        </div>

    </section>
    <h1 class="center-align text-30">Paiements</h1>

    <table class="striped white centered">
        <thead>
        <tr class="gold-back">
            <th class="thAdmin"></th>
            <th class="thAdmin text-30 secondFont">EN ATTENTE DE VALIDATION</th>
            <th class="thAdmin"></th>
        </tr>
        <tr class="black-back white-text">
            <th class="thAdmin">Nom</th>
            <th class="thAdmin">Prénom</th>
            <th class="thAdmin">Valider</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($notPay as $row) { ?>

        <?php if ($row->id != 1) { ?>
        <tr>
            <td><?= $row->name ?></td>
            <td><?= $row->f_name ?></td>
            <td>
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal<?= $row->id ?>"><i class="material-icons">attach_money</i></a>

                <!-- Modal Structure -->
                <div id="modal<?= $row->id ?>" class="modal modalPay">
                    <form action="" method="post">
                        <div class="modal-content">
                            <h4><?= $row->name ?> <?= $row->f_name ?></h4>
                            <p class="red-text">Si tu es sûr qu'il a bien payé, sélectionnes le menu et clique sur Valider</p>
                            <div class="input-field col s12">
                                <select name="selectPay" id="selectPay">
                                    <option value="0" disabled selected>Quel prestation ?</option>
                                    <option value="1">Menu Enfant - 35€</option>
                                    <option value="2">Menu Adulte - 50€</option>
                                    <option value="3">Menu Gourmand - 80€</option>
                                </select>

                                <label for="selectPay">Menus</label>
                                <input type="hidden" name="idPay" value="<?= $row->id ?>">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submitPay" class="waves-effect waves-green btn-flat">Valider</button>
                            <a href="#!" class="modal-close waves-effect waves-green red-text btn-flat">Annuler</a>
                        </div>
                    </form>
                </div>
            </td>
        </tr>
            <?php } ?>

        <?php } ?>
        </tbody>
    </table>



    <table class="striped white centered">
        <thead>
        <tr class="gold-back">
            <th class="thAdmin"></th>
            <th class="thAdmin text-30 secondFont">VALIDES</th>
            <th class="thAdmin"></th>
        </tr>
        <tr class="black-back white-text">
            <th class="thAdmin">Nom</th>
            <th class="thAdmin">Prénom</th>
            <th class="thAdmin">Menu</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($pay as $row) { ?>

        <?php if ($row->id != 1) { ?>
        <tr>
            <td><?= $row->name ?></td>
            <td><?= $row->f_name ?></td>
            <td><b>
                <?= $row->menu == 1 ? 'Enfant' : ($row->menu == 2 ? 'Adulte' : 'Gourmand') ?>
            </b></td>
        </tr>
            <?php } ?>

        <?php } ?>
        </tbody>
    </table>

</main>
<?php include_once '../templates/footer.php' ?>
