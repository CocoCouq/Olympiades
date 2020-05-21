<?php
include_once 'connexion.php';

class Messages {
    private $db;

    public function __construct()
    {
        $this->db = connexion();
    }

    public function getAll() :array
    {
        $request = 'SELECT chat.id as messageID, chat.message, chat.send_date, participants.pseudo, participants.id as playerID FROM chat JOIN participants ON participants.id = chat.user_id ORDER BY chat.send_date DESC';
        $result = $this->db->prepare($request);
        $result->execute();
        $tab = $result->fetchAll(PDO::FETCH_OBJ);
        $result->closeCursor();

        return $tab;
    }

    public function sendMessage(string $message, int $user_id) :void
    {
        $request = 'INSERT INTO chat(user_id, message) VALUES (:user_id, :message)';
        $result = $this->db->prepare($request);
        $result->bindParam(':user_id', $user_id);
        $result->bindParam(':message', $message);
        $result->execute();
        $result->closeCursor();
    }

    public function deleteMessage(int $id) :void
    {
        $request = 'DELETE FROM chat WHERE id = :id';
        $result = $this->db->prepare($request);
        $result->bindParam(':id', $id);
        $result->execute();
        $result->closeCursor();
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
