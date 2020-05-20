<?php
require_once '../../models/m_player.php';
require_once '../../models/m_message.php';

session_start();
if ($_SESSION['connected'] != 'OK') {
    header('location:../login/login.php');
}
else {

    $players = new Player();
    $tab = $players->getList();
    $actualID = $players->getByLogin($_SESSION['login'])->id;

    $messages = new Messages();

    if (isset($_POST['sendMessage'])) {
        $newMessage = filter_input(INPUT_POST, 'newMessage', FILTER_SANITIZE_SPECIAL_CHARS);

        $messages->sendMessage($newMessage, $actualID);
    }

    $messagesList= $messages->getAll();


}


