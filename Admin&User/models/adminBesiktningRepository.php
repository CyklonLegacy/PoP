<?php

class adminBesiktningRepository
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

    public function fetchBesiktning($id) {
        $params = array($id);
        $result = null;

        if ($stmt = $this->pdo->prepare("SELECT kundNamn, address, kundTelefon, owner, voltage, lowest, highest, besiktningsBas, userId FROM besiktning where id = ?")) {
            if ($stmt->execute($params)) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result = array('kundNamn' => $row['kundNamn'],'adress' => $row['address'], 'kundTelefon' => $row['kundTelefon'], 'owner' => $row['owner'],
                                        'voltage' => $row['voltage'], 'lowest' => $row['lowest'], 'highest' => $row['highest'], 'besiktningsBas' => $row['besiktningsBas']);
                }
            } else {
                echo "Error";
            }
        }
        return $result;
    }

    public function updateBesiktning($entNamn, $entTelefon, $entAddress, $status, $id) {
        //echo "Hello";
        $params = array($entNamn, $entTelefon, $entAddress, $status, $id);
        echo $id;
        if ($stmt = $this->pdo->prepare("UPDATE besiktning SET entrepreneur = '$entNamn', entrepreneurTelefon = '$entTelefon', entrepreneurAdress = '$entAddress',
                                                status = '$status' WHERE id ='$id'")) {
            if (!$stmt->execute()) {
                throw new Exception("Failed to execute statement: " . $stmt->errorInfo()[2]);
            }
        } else {
            throw new Exception("Failed to prepare statement: " . $stmt->errorInfo()[2]);
        }

        /*if ($stmt = $this->pdo->prepare("UPDATE besiktning SET entrepreneur = ?, entrepreneurTelefon = ?, entrepreneurAdress = ?,
                                                status = ? WHERE id = ?")) {
            if ($stmt->execute($params)) {

            } else {
                echo "Error";
            }
        }*/
    }

}

?>