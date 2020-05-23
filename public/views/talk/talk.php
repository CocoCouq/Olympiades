<?php include_once '../../controllers/c_talk.php' ?>
<?php include_once '../templates/header.php' ?>

    <main>
        <h1 class="center-align text-5 secondFont">Wall of Fame</h1>
        <div id="playersLine" class="black-back section">
            <!-- PLAYERS LIST (without admin) -->
            <?php foreach ($tab as $row) { ?>
                <?php if ($row->pseudo != 'Olympiades') { ?>
                    <div class="playersBlock gold-back">
                        <span class="gold-back secondFont text-contrast text-2 border-2 card authorMessage"><?= $row->pseudo ?></span>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
        <div class="divider section transparent"></div>
        <div id="chat" class="blue-grey darken-4">

            <!-- INPUT SEND NEW MESSAGE -->
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

            <!-- MESSAGES LIST -->
            <?php foreach ($messagesList as $message) { ?>
                <div class="row">
                    <?php if ($message->pseudo == 'Olympiades') { ?>
                        <div class="message black-back lighten-2 left row z-depth-5 col s11">
                            <div class="col s10 offset-s1 margin-t-15">
                                <div class="center-align">
                                    <span class="gold-back secondFont text-contrast text-20 card authorMessage">
                                       <i class="tiny material-icons">grade</i> OLYMPIADES <i class="tiny material-icons circle">grade</i>
                                    </span>
                                </div>
                                <p><?= $message->message ?></p>
                                <small class="grey-text text-lighten-1 right"><?= $message->send_date ?></small>
                            </div>
                        </div>
                    <?php } else { ?>
                    <div class="<?= $message->pseudo == $_SESSION['login'] ? 'messageUser right' : 'message left' ?> row z-depth-5 col s11">
                        <div class="col s10 offset-s1 margin-t-15">
                            <span class="gold-back secondFont text-contrast text-20 border-2 card authorMessage"><?= $message->pseudo ?></span>
                            <p><?= $message->message ?></p>
                            <small class="grey-text text-lighten-1 right"><?= $message->send_date ?></small>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

    </main>

<?php include_once '../templates/footer.php' ?>
