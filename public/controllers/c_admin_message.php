<?php
require_once '../../models/m_message.php';
session_start();

if ($_SESSION['auth'] == 'OK' && $_SESSION['user'] == 'Admin') {
    $message = new Messages();

    if (isset($_POST['newFullMessage'])) {
        $message_post = $_POST['wyz'];
        $message->sendMessage($message_post, 1);
    }
    if (isset($_POST['deleteMessage'])) {
        $id = filter_input(INPUT_POST, 'hiddenID', FILTER_SANITIZE_NUMBER_INT);
        $message->deleteMessage($id);
    }

    $tab = $message->getAll();
}
else {
    header('location:./index.php');
}
