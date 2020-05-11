<?php
// Data base connexion
include_once 'connexion.php';

class News {
    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }

    // Get five random news
    public function getFiveRand() :array
    {
        $request = 'SELECT * FROM news ORDER BY RAND() LIMIT 5';
        $result = $this->db->prepare($request);
        $result->execute();
        $tab = $result->fetchAll(PDO::FETCH_OBJ);
        $result->closeCursor();

        return $tab;
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
