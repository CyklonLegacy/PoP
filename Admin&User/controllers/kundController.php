<?php

require_once "controllers/Controller.php";
require_once "models/kundRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class kundController extends Controller
{

    private $repository;

    public function __construct()
    {
        $this->repository = new kundRepository();
    }

    public function index()
    {
        session_start();
        if($_SESSION["role"] == "standard") {
            //echo $_SESSION["id"];
            $model["username"] = $_SESSION["username"];
            $model["besiktning"] =  $this->repository->fetchBesiktningar($_SESSION["id"]);
            //echo $model["besiktning"][1]["adress"];
            return $this->render("kund", $model);
        } else {
            echo "Bugger Off!";
        }
    }

}
