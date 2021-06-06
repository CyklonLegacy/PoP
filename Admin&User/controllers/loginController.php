<?php

require_once "controllers/Controller.php";
require_once "models/loginRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class loginController extends Controller
{

    private $repository;

    public function __construct()
    {
        $this->repository = new loginRepository();
    }

    public function index()
    {
        return $this->render("login");
    }

    public function login() {
        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $error = null;

        if ($this->validString($username) && $this->validString($password)) {
            try {
                $result = $this->repository->login($username, $password);
                if ($result) {

                    $_SESSION["username"] = $username;

                    $role = $this->repository->getRole($username);
                    $_SESSION["id"] = $this->repository->getId($username);

                    $_SESSION["role"] = $role;

                    $this->selectWebpage($role); //{

                    //}

                    //$user_role = $this->repository->getRole($username);

                    //$_SESSION["user_id"] = $user_id;
                    //header("location: main");
                    //$error = "Success name: ".$username." and role:".$user_role."!";
                } else {
                    $error = "Invalid username and/or password";
                }
            } catch (Exception $e) {
                error_log("Error: " . $e->getMessage());
                $error = "Something went wrong";
            }
        }
        $model["error"] = $error;
        return $this->render("login", $model);
    }

    private function validString($text) {
        return !empty($text) && is_string($text) && trim($text) != "";
    }

    private function selectWebpage($role) {
        if ($role == "standard") {
            header("location: kund");
        } elseif ($role == "Besiktning" || $role == "El") {
            //$_SESSION["role"] = $role;
            //echo "Admin Stuff";
            header("location: admin");
        }
    }

}
?>