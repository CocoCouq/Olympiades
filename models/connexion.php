<?php
function connexion() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=ccouq;charset=utf8', 'ccouq', '19141cc', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch (Exception $e) {
        echo'Erreur: '.$e->getMessage().'<br>';
        echo'N° : '.$e->getCode();
        die('Fin du script');
    }
    return $db;
}
