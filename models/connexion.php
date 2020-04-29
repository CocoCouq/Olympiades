<?php
function connexion() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=Olympiades;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch (Exception $e) {
        echo'Erreur: '.$e->getMessage().'<br>';
        echo'N° : '.$e->getCode();
        die('Fin du script');
    }
    return $db;
}
