<?php
require_once '../../models/m_player.php';

session_start();
if ($_SESSION['connected'] != 'OK') {
    header('location:../login/login.php');
}
else {
    $players = new Player();
    $tab = $players->getList();
}


