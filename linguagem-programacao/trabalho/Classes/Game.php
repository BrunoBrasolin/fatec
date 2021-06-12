<?php

namespace Classes;

use Classes\Connection;
use Classes\Errors;
use PDO;
use PDOException;

require_once 'Connection.php';
require_once 'Errors.php';
require_once 'config.php';
class Game
{
    private $conn;

    function __construct()
    {
        try {
            $this->conn = Connection::getConnection();
        } catch (PDOException $e) {
            Errors::solveError($e);
        }
    }

    public function get()
    {
        $query = $this->conn->prepare("SELECT * FROM games;");
        $query->execute();
        $games = array();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($games, $result);
        }
        return (object) $games;
    }

    public function set($name, $description, $image_link)
    {
        $query = $this->conn->prepare("INSERT INTO `games` (name, description, image_link) VALUES (:name, :description, :image_link);");
        $query->bindValue(':name', $name);
        $query->bindValue(':description', $description);
        $query->bindValue(':image_link', $image_link);
        $result = $query->execute();
        if ($result)
            return $name;
        else
            return false;
    }

    public function remove($id)
    {
        $query = $this->conn->prepare("DELETE FROM users WHERE `users`.`id` = :id");
        $query->bindValue(':id', $id);
        $result = $query->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
