<?php

class fastighetRepository
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=wst",
                "wst",
                "wst",
                array(PDO::ATTR_PERSISTENT => true)
            );
        } catch (PDOException $ex) {
            die("Failed to connect: " . $ex->getMessage());
        }
    }

    public function __destruct() {
        $this->pdo = null;
    }

}