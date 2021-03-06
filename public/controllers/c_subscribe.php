<?php
require_once '../models/m_player.php';

session_start();

$_SESSION['message'] = '';
$players = new Player();
// If all inputs are not empty
if (isset($_POST['btnAddPlayer']) && !empty($_POST['name']) && !empty($_POST['f_name']) && !empty($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['pseudo'])) {

    if ($_POST['pwd1'] == $_POST['pwd2'] || count($_POST['pwd1']) < 8) {
        // Sanitize inputs
        $array = [
            ':name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),
            ':f_name' => filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_SPECIAL_CHARS),
            ':pseudo' => filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS),
            ':email' => filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL),
            ':phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT),
            ':pwd' => password_hash($_POST['pwd1'], PASSWORD_DEFAULT),
            ':desc' => filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        // Verify that player does not exist
        $count = $players->countUser($array[':email'], $array[':pseudo']);

        if ($count == 0) {
            $players->addPlayer($array);
            $_SESSION['login'] = $array[':pseudo'];
            $_SESSION['connected'] = 'OK';
            session_regenerate_id();
            header('location:../views/cart/cart.php');
//            $_SESSION['message'] = 'Bienvenue dans la cour des grands<br><a class="btn gold-back secondFont black-text text-contrast text-25" href="./views/talk/talk.php">Signales ton arrivée</a>';
        } else {
            $_SESSION['message'] = 'L\'email ou le pseudo sont déjà utilisés';
            header('location:../views/login/subscribe.php');
        }
    }
    else {
        $_SESSION['message'] = 'Les mots de passe ne correspondent pas ou ne font pas au moins 8 caractères';
        header('location:../views/login/subscribe.php');
    }
}
else {
    header('location:../views/login/subscribe.php');
}
