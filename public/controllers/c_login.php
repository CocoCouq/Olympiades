<?php
require_once '../../models/m_player.php';

session_start();

$player = new Player();
$login_message = '';
$pwd_message = '';

if (isset($_POST['btnLogin'])) {

    if (!empty($_POST['login'])) {
        if (!empty($_POST['pwd'])) {
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
            $count = $player->countUser($login, $login);

            if ($count != 0) {
                $row = $player->getByLogin($login);

                if (password_verify($_POST['pwd'], $row->password)){
                    $_SESSION['login'] = $row->pseudo;
                    $_SESSION['connected'] = 'OK';
                    session_regenerate_id();
                    header('location:../talk/talk.php');
                }
                else {
                    $pwd_message = 'Mot de passe incorrect';
                }
            }
            else {
                $login_message = 'Le joueur n\'existe pas';
            }
        }
        else {
            $pwd_message = 'Il faut renseigner le mot de passe';
        }
    }
    else {
        $login_message = 'Il faut renseigner l\'identifiant';
    }
}
else if (isset($_POST['disconnection'])) {
        unset($_SESSION['login']);
        unset($_SESSION['connected']);
        if(ini_get("session.use_cookies")) {
            setcookie(session_name(), '', time()-84600);
        }
        session_destroy();
}

if ($_SESSION['connected'] == 'OK') {
    $row_player = $player->getByLogin($_SESSION['login']);
}
