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
        $result_test->closeCursor();

        return count($tab);
    }

    // Edit player
    public function editPLayer(array $array) :void
    {
        $request_edit = 'UPDATE participants SET name = :name, f_name = :f_name, pseudo = :pseudo, mail = :email, phone = :phone WHERE id = :id';
        $result_edit = $this->db->prepare($request_edit);
        $result_edit->execute($array);
        $result_edit->closeCursor();
    }

    // Delete player
    public function deletePlayer(int $id) :void
    {
        $request_delete = 'DELETE FROM participants WHERE id = :id';
        $result_delete = $this->db->prepare($request_delete);
        $result_delete->bindParam(':id', $id);
        $result_delete->execute();
        $result_delete->closeCursor();
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
