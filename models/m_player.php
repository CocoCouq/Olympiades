<?php
// Data base connexion
include_once 'connexion.php';

class Player {
    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }

    // List of players
    public function getList() : array
    {
        $request = 'SELECT * FROM participants ORDER BY f_name ASC';
        $result = $this->db->prepare($request);
        $result->execute();
        $tab = $result->fetchAll(PDO::FETCH_OBJ);
        $result->closeCursor();

        return $tab;
    }

    // Add player
    public function addPlayer(array $array) :void
    {
        $request_insert = 'INSERT INTO participants(name, f_name, pseudo, mail, phone) VALUE (:name, :f_name, :pseudo, :email, :phone)';
        $result_insert = $this->db->prepare($request_insert);
        $result_insert->execute($array);
        $result_insert->closeCursor();
    }

    // Verify that user didn't create
    public function countUser(string $user_mail, string $user_pseudo) :int
    {
        $request_test = 'SELECT * FROM participants WHERE mail = :email OR pseudo = :pseudo';
        $result_test = $this->db->prepare($request_test);
        $result_test->bindParam(':email', $user_mail);
        $result_test->bindParam(':pseudo', $user_pseudo);
        $result_test->execute();
        $tab = $result_test->fetchAll();

        return count($tab);
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
