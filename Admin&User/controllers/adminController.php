<?php

require_once "controllers/Controller.php";
require_once "models/adminRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class adminController extends Controller
{

    private $repository;

    public function __construct()
    {
        $this->repository = new adminRepository();
    }

    public function index()
    {
        session_start();
        if($_SESSION["role"] == "El" || $_SESSION["role"] == "Besiktning") {
            $model["besiktning"] =  $this->repository->fetchBesiktningar();
            return $this->render("admin", $model);
        } else {
            echo "Bugger Off!";
        }
        //return $this->render("admin");
    }

}
