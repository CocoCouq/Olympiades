<?php
require_once '../../models/m_player.php';
session_start();

if ($_SESSION['auth'] == 'OK' && $_SESSION['user'] == 'Admin') {

    $player = new Player();

    if (isset($_POST['submitPay']) && !empty($_POST['idPay']) && $_POST['selectPay'] != 0) {
        $id = filter_input(INPUT_POST, 'idPay', FILTER_SANITIZE_NUMBER_INT);
        $menu = filter_input(INPUT_POST, 'selectPay', FILTER_SANITIZE_NUMBER_INT);

        $player->setPay($id, $menu);
    }

    $pay = $player->getPayList();
    $notPay = $player->getNotPayList();

}
else {
    header('location:./index.php');
}
