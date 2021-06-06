<?php

class adminRepository
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

    public function fetchBesiktningar() {
        $result = null;
        $i = 0;

        if ($stmt = $this->pdo->prepare("SELECT id, kundNamn, address, status FROM besiktning")) {
            if ($stmt->execute()) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result[$i] = array('id' => $row['id'], 'kundNamn' => $row['kundNamn'],'adress' => $row['address'], 'status' => $row['status']);
                    $i++;
                }
            } else {
                echo "Error";
            }
        }

        return $result;
    }

    public function login($username, $password) {

    }

}

?>