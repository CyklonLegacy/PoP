<?php

class besiktningRepository
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

    public function fetchBesiktningarKund($id) {
        $params = array($id);
        $result = null;
        $i = 0;

        if ($stmt = $this->pdo->prepare("SELECT address, status FROM besiktningar WHERE userId = ?")) {
            if ($stmt->execute($params)) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result[$i] = array('adress' => $row['address'], 'status' => $row['status']);
                    $i++;
                }
            }
        }
        return $result;
    }

    public function saveBestikningsForm($kundNamn, $kundAdress, $kundTelefon, $owner, $voltage,
                                        $lowest, $highest, $grund, $userID) {

        if ($stmt = $this->pdo->prepare("INSERT INTO besiktning (kundNamn, address, kundTelefon, owner, voltage, lowest, highest, besiktningsBas, userId) 
                                                VALUES ('$kundNamn', '$kundAdress', '$kundTelefon', '$owner', '$voltage', '$lowest', '$highest', '$grund', '$userID')")) {
            if (!$stmt->execute()) {
                throw new Exception("Failed to execute statement: " . $stmt->errorInfo()[2]);
            }
        } else {
            throw new Exception("Failed to prepare statement: " . $stmt->errorInfo()[2]);
        }

    }

    public function editBesiktningsForm($json, $editedJson) {

    }

}

?>