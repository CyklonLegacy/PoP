<?php

class loginRepository
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=el",
                "el",
                "el",
                array(PDO::ATTR_PERSISTENT => true)
            );
        } catch (PDOException $ex) {
            die("Failed to connect: " . $ex->getMessage());
        }
    }

    public function __destruct() {
        $this->pdo = null;
    }

    public function login($username, $password) {
        $params = array($username, $password);

        if ($stmt = $this->pdo->prepare("SELECT id FROM users WHERE username = ? and password = ?")) {
            if (!$stmt->execute($params)) {
                throw new Exception("Failed to execute statement: " . $stmt->errorInfo()[2]);
            }
            if ($stmt->rowCount() === 1) return true;
        } else {
            throw new Exception("Failed to prepare statement: " . $stmt->errorInfo()[2]);
        }
        return false;
    }

    public function getRole($username) {
        $params = array($username);

        $result = null;

        if ($stmt = $this->pdo->prepare("SELECT role FROM users WHERE username = ?")) {
            if ($stmt->execute($params)) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result = $row['role'];
                }
            }
        }
        return $result;
    }

    public function getId($username) {
        $params = array($username);

        $result = null;

        if ($stmt = $this->pdo->prepare("SELECT id FROM users WHERE username = ?")) {
            if ($stmt->execute($params)) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result = $row['id'];
                }
            }
        }
        return $result;
    }
}