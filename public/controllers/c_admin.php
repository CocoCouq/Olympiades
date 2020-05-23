<?php
require_once '../../models/m_player.php';

$message = '';
$players = new Player();

if (isset($_POST['btnEdit']) && !empty($_POST['id'])) {
    // Sanitize inputs
    $array = [
        ':name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),
        ':f_name' => filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_SPECIAL_CHARS),
        ':pseudo' => filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS),
        ':email' => filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL),
        ':phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT),
        ':id' => filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)
    ];

    $players->editPLayer($array);
    $message = 'Modification réalisée';
}

if (isset($_POST['btnDelete']) && !empty($_POST['id'])) {
    // Sanitize inputs
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $players->deletePlayer($id);
    $message = 'Suppression du joueur';
}

session_start();
if (isset($_POST['btnLogin']) && ($_POST['login'] == 'Admin') && !empty($_POST['password'])) {
    $admin = $players->getByLogin('Olympiades');
    if (password_verify($_POST['password'], $admin->password)) {
        if ($_POST['login'] = 'Admin') {
            $_SESSION['auth'] = 'OK';
            $_SESSION['user'] = $_POST['login'];
        }
    }
}

if (isset($_POST['disconnection'])) {
    unset($_SESSION['user']);
    unset($_SESSION['auth']);
    if(ini_get("session.use_cookies")) {
        setcookie(session_name(), '', time()-84600);
    }
    session_destroy();
}

$tab = $players->getList();


