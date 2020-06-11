<?php include_once '../../controllers/c_admin_message.php' ?>
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
            <a class="btn" href="./message.php"><i class="material-icons">refresh</i></a>
        </div>
        <div class="col s3 center-align">
            <a class="btn" href="../talk/talk.php" target="_blank">chat</a>
        </div>
        <div class="col s3 center-align">
            <a class="btn" href="./index.php"><i class="material-icons">home</i></a>
        </div>

    </section>
    <h1 class="center-align text-30">Massages Admins</h1>

        <form action="" method="post">
            <!--TEXTAREA-->
            <label class="text-25" for="wyz">Ajoutes un joli message</label>
            <textarea id="wyz" name="wyz"></textarea>

            <div class="center-align">
                <button type="submit" name="newFullMessage" class="btn section margin-b-10 margin-t-15">Ajouter</button>
            </div>
        </form>

    <div class="blue-grey darken-4 section">
    <?php foreach ($tab as $row) { ?>
        <form action="" method="post">
            <div class="row black-text">

                <?php if ($row->pseudo == 'Olympiades') { ?>
                    <div class="message black-back lighten-2 left row z-depth-5 col s11">
                        <div class="col s10 offset-s1 margin-t-15">
                            <div class="center-align">
                                <span class="gold-back secondFont text-contrast text-20 card authorMessage">
                                    <i class="tiny material-icons">grade</i> OLYMPIADES <i class="tiny material-icons circle">grade</i>
                                </span>
                            </div>
                            <p><?= $row->message ?></p>
                            <small class="grey-text text-lighten-1 right"><?= $row->send_date ?></small>
                            <input type="hidden" name="hiddenID" value="<?= $row->messageID ?>">
                            <button name="deleteMessage" type="submit" class="col s1 btn-flat"><i class="material-icons red-text">delete</i></button>
                        </div>
                    </div>
                <?php } else {?>
                <div class="message left row z-depth-5 col s11">
                    <div class="col s10 offset-s1 margin-t-15">
                        <span class="gold-back secondFont text-contrast text-20 card authorMessage"><?= $row->pseudo ?></span>
                        <p><?= $row->message ?></p>
                        <small class="grey-text text-lighten-1 right"><?= $row->send_date ?></small>
                        <input type="hidden" name="hiddenID" value="<?= $row->messageID ?>">
                        <button name="deleteMessage" type="submit" class="col s1 btn-flat"><i class="material-icons red-text">delete</i></button>
                    </div>
                </div>
                <?php } ?>

            </div>
        </form>
    <?php } ?>
    </div>
</main>
<script src="https://cdn.tiny.cloud/1/0u8l0putpzzp19wlerho1tqj5qj2sxqiynfhxw0ywtnalv6o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea',
        skin: 'oxide-dark',
        content_css: 'dark',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar: 'undo redo | fontsizeselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | text',
        menubar: ''
    })
</script>
<?php include_once '../templates/footer.php' ?>
