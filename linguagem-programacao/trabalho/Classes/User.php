<?php

namespace Classes;

use Classes\Connection;
use Classes\Errors;
use PDO;
use PDOException;

require_once 'Connection.php';
require_once 'Errors.php';
require_once 'config.php';
class User
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
        $query = $this->conn->prepare("SELECT * FROM users;");
        $query->execute();
        $users = array();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($users, $result);
        }
        return $users;
    }

    public function set($username, $name, $email, $password)
    {
        $query = $this->conn->prepare("INSERT INTO `users` (username, name, email, password) VALUES (:username, :name, :email, :password);");
        $query->bindValue(':username', $username);
        $query->bindValue(':name', $name);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', md5($password));
        $result = $query->execute();
        if ($result) {
            return (object)[
                'username' => $username,
                'name' => $name,
                'email' => $email,
                'type' => 0,
            ];
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {
        $query = $this->conn->prepare("SELECT * FROM `users` WHERE `username` = :username;");
        $query->bindValue(':username', $username);
        if ($query->execute()) {
            if ($query->rowCount() > 0) {
                $row = $query->fetch();
                if (md5($password) == $row['password'])
                    return (object) $row;
            }
        }
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
