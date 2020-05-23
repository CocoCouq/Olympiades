<?php
require_once '../../models/m_player.php';
require_once '../../models/m_message.php';

// Accessible only if player is connect
session_start();
if ($_SESSION['connected'] != 'OK') {
    header('location:../login/login.php');
}
else {
    $players = new Player();
    $messages = new Messages();

    // Players list and actual player recover
    $tab = $players->getList();
    $actualID = $players->getByLogin($_SESSION['login'])->id;

    if (isset($_POST['sendMessage']) && !empty($_POST['newMessage'])) {
        $newMessage = filter_input(INPUT_POST, 'newMessage', FILTER_SANITIZE_SPECIAL_CHARS);
        // Replace /n & add message
        $newMessage = str_replace('&#13;&#10;', '<br>', $newMessage);
        $messages->sendMessage($newMessage, $actualID);
    }
    // Messages list
    $messagesList= $messages->getAll();
}
