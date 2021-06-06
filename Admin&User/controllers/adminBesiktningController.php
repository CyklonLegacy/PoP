<?php

require_once "controllers/Controller.php";
require_once "models/adminBesiktningRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class adminBesiktningController extends Controller {

    private $repository;

    public function __construct()
    {
        $this->repository = new adminBesiktningRepository();
    }

    public function index() {
        $model["id"] = $_GET["id"];
        $model["besiktning"] = $this->repository->fetchBesiktning($_GET["id"]);
        return $this->render("adminBesiktning", $model);
    }

    public function updateBesiktning() {
        $this->repository->updateBesiktning($_POST["Namn"], $_POST["Mobil2"], $_POST["Adress2"],
            $_POST["resultat"], $_GET["id"]);
        header("location: admin");
    }

}

?>