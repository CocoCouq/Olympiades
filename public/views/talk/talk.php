<?php include_once '../../controller/c_talk.php' ?>
<?php include_once '../templates/header.php' ?>

    <main>
        <h1 class="center-align text-5">Wall of Fame</h1>
        <div id="playersLine" class="black-back section">
            <?php foreach ($tab as $row) { ?>
            <div class="playersBlock gold-back">
                <span class="gold-back secondFont text-contrast text-2 border-2 card authorMessage"><?= $row->pseudo ?></span>
            </div>
            <?php } ?>
        </div>
        <div class="divider section transparent"></div>
        <div id="chat" class="blue-grey darken-4">

            <form class="gold-back" action="" method="post">
                <div class="row black-back">
                    <div class="input-field col s10 offset-s1">
                        <textarea id="message" name="newMessage" placeholder="LAISSE UNE TRACE, <?= strtoupper($_SESSION['login']) ?>" class="materialize-textarea white-text"></textarea>
                        <label for="message">C'est le moment de chambrer</label>
                    </div>
                    <div class="col s12 right-align">
                        <button type="submit" name="sendMessage" class="btn-flat blue-text text-lighten-4">Envoyer</button>
                    </div>
                </div>
            </form>

            <?php foreach ($messagesList as $message) { ?>
                <div class="row">
                    <div class="<?= $message->pseudo == $_SESSION['login'] ? 'messageUser right' : 'message left' ?> row z-depth-5 col s11">
                        <div class="col s10 offset-s1 margin-t-15">
                            <span class="gold-back secondFont text-contrast text-20 border-2 card authorMessage"><?= $message->pseudo ?></span>
                            <p><?= $message->message ?></p>
                            <small class="grey-text text-lighten-1 right"><?= $message->send_date ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    </main>

<?php include_once '../templates/footer.php' ?>
