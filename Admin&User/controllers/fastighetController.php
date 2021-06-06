<?php

require_once "controllers/Controller.php";
require_once "models/fastighetRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class fastighetController extends Controller {

    private $repository;

    public function __construct()
    {
        $this->repository = new fastighetRepository();
    }

    public function index() {
        return $this->render("fastighet");
    }

    public function saveFastighetsForm() {

        session_start();

                                           ;

        $obj = (object) [
            'personName1' => $_POST["name_first"],
            'personSignum1' => $_POST["personSignum1"],

            'fBeteckning' => $_POST["fBeteckning"],
            'adress' => $_POST["adress"],

            'bostad' => $_POST["bostad"],
            'varmekalle' => $_POST["varmekalla"],
            'matcentral' => $_POST["matcentral"],
            'forlaggning' => $_POST["forlaggning"],
            'anslutning' => $_POST["anslutning"],

            /*'startdate' =>$_POST["startdate"],
            'ort' => $_POST["ort"],
            'enddate' => $_POST["fromdate"],
            'telefon' => $_POST["telefon"],
            'mail' => $_POST["epost"]*/
        ];

        $myJSON = json_encode($obj);
        $model["message"] = $this->sendMail($myJSON);

        return $this->render("login");
    }

    private function sendMail($json) {
        $mail = new PHPMailer(true);
        $message = null;
        try {
            //Server settings
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = "andreoberg98@gmail.com"; // Ange mail som skall användas OBS! Behöver ändra settings på google konto för att tillåta less secure apps
            $mail->Password = "";

            $mail->SMTPSecure = 'tls'; // tls eller sls (tls med google konton)
            $mail->Port = 587;

            $mail->setFrom('sender@example.com', 'Admin'); // Lite oklart med denna rad bort sätt från att kontot som skickar får namnet Admin i detta fall
            //$mail->addAddress('test@example.net', 'Recipient1');
            $mail->addAddress('testmail@gmail.com'); // Till vem mailet skickas
            //$mail->addReplyTo('noreply@example.com', 'noreply');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            $mail->AddStringAttachment($json, "test.json"); // Bifogade filer skall experimentera vidare med

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Test Mail Subject!'; // Ämnes rad
            $mail->Body    = 'This is SMTP Email Test'; // Mail content
            $mail->send();
            $message = 'Message has been sent';
        } catch (Exception $e) {
            $message = $mail->ErrorInfo;
        }
        return $message;
    }

}
