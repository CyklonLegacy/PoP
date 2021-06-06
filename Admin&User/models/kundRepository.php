<?php

class kundRepository
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

    public function fetchBesiktningar($id) {
        $params = array($id);
        $result = null;
        $i = 0;

        if ($stmt = $this->pdo->prepare("SELECT address, status FROM besiktning WHERE userId = ?")) {
            if ($stmt->execute($params)) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result[$i] = array('adress' => $row['address'], 'status' => $row['status']);
                    $i++;
                }
            }
        }
        //echo $i;
        return $result;
    }

    public function saveFastighetsForm($json) {

    }

    public function editFastighetsForm($json, $editedJson) {

    }
}