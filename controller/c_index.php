<?php
require_once 'models/m_player.php';

$message = '';
$players = new Player();
// If all inputs are not empty
if (isset($_POST['btnAddPlayer']) && !empty($_POST['name']) && !empty($_POST['f_name']) && !empty($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['pseudo'])) {

    // Sanitize inputs
    $array = [
        ':name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),
        ':f_name' => filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_SPECIAL_CHARS),
        ':pseudo' => filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS),
        ':email' => filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL),
        ':phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT)
    ];

    // Verify that player does not exist
    $count = $players->countUser($array[':email'], $array[':pseudo']);

    if ($count == 0) {
        $players->addPlayer($array);
        $message = 'Bienvenue dans la cour des grands';
    }
    else {
        $message = 'L\'email ou le pseudo sont déjà utilisés';
    }
}

$tab = $players->getList();
