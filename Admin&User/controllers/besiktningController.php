<?php

require_once "controllers/Controller.php";
require_once "models/besiktningRepository.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/andre/vendor/autoload.php'; // Ange användare name efter /home/namn

class besiktningController extends Controller {

    private $repository;

    public function __construct()
    {
        $this->repository = new besiktningRepository();
    }

    public function index() {
        return $this->render("besiktning");
    }

    public function saveBesiktning() {
        session_start();
        if (isset($_SESSION["username"])) {

            $userID = $_SESSION["id"];

            $this->repository->saveBestikningsForm($_POST["Kund"], $_POST["Adress"], $_POST["Telefon"],
                $_POST["owner"], $_POST["märkspänning"], $_POST["lowest"], $_POST["highest"],
                $_POST["grund"], $userID);


            /*$obj = (object) [

                // Kund information
                'kund' => $_POST["Kund"],
                'kundMobil' => $_POST["Mobil"],
                'kundAdress' => $_POST["Adress"],
                'kundTelefon' => $_POST["Telefon"], // Sanolikt att denna kan tas bort

                // Elentrepenör information
                'entrepenör' => $_POST["Namn"],
                'entrepenörMobil' => $_POST["Mobil2"],
                'entrepenörAdress' => $_POST["Adress2"],
                'entrepenörTelefon' => $_POST["Telefon2"], // Sanolikt att denna kan tas bort

                // Elnäts ägare
                'ägare' => $_POST["owner"],

                // Märk spänning
                'spänning' => $_POST["märkspänning"],
                'minstaKortslutning' => $_POST["lowest"],
                'störstaKortslutning' => $_POST["highest"],

                // Grunden för besiktningen
                'grund' => $_POST["grund"],

                // Okulär
                'andbox' => $_POST["7a"],
                'skydd' => $_POST["skydd"],
                'typ' => $_POST["typ"],
                'area' => $_POST["area"],

                '7d_1' => $_POST["7d_1"],
                '7d_2' => $_POST["7d_2"],
                '7d_3' => $_POST["7d_3"],
                '7d_4' => $_POST["7d_4"],
                '7d_5' => $_POST["7d_5"],
                '7d_6' => $_POST["7d_6"],
                '7d_7' => $_POST["7d_7"],
                '7d_8' => $_POST["7d_8"],
                '7d_9' => $_POST["7d_9"],
                '7d_10' => $_POST["7d_10"],
                '7d_11' => $_POST["7d_11"],
                '7d_12' => $_POST["7d_12"],
                '7d_13' => $_POST["7d_13"],
                '7d_14' => $_POST["7d_14"],
                '7d_15' => $_POST["7d_15"],
                '7d_16' => $_POST["7d_16"],

                '7e_1' => $_POST["7e_1"],
                '7e_2' => $_POST["7e_2"],
                '7e_3' => $_POST["7e_3"],
                '7e_4' => $_POST["7e_4"],
                '7e_5' => $_POST["7e_5"],
                '7e_6' => $_POST["7e_6"],

                '7f_1' => $_POST["7f_1"],
                '7f_2' => $_POST["7f_2"],
                '7f_3' => $_POST["7f_3"],
                '7f_4' => $_POST["7f_4"],
                '7f_5' => $_POST["7f_5"],

                '7g_1' => $_POST["7g_1"],
                '7g_2' => $_POST["7g_2"],
                '7g_3' => $_POST["7g_3"],
                '7g_4' => $_POST["7g_4"],

                '7h_1' => $_POST["7h_1"],
                '7h_2' => $_POST["7h_2"],
                '7h_3' => $_POST["7h_3"],
                '7h_4' => $_POST["7h_4"],

                '7i_1' => $_POST["7i_1"],
                '7i_2' => $_POST["7i_2"],
                '7i_3' => $_POST["7i_3"],

                '7j_1' => $_POST["7j_1"],
                '7j_2' => $_POST["7j_2"],
                '7j_3' => $_POST["7j_3"],
                '7j_4' => $_POST["7j_4"],
                '7j_5' => $_POST["7j_5"],

                '7k_1' => $_POST["7k_1"],
                '7k_2' => $_POST["7k_2"],

                '7l_1' => $_POST["7l_1"],
                '7l_2' => $_POST["7l_2"],
                '7l_3' => $_POST["7l_3"],

                '7m_1' => $_POST["7m_1"],
                '7m_2' => $_POST["7m_2"],
                '7m_3' => $_POST["7m_3"],

                'installationer' => $_POST["installationer"],
                //'bilagor' => $_POST["bilagor"]


                'isolationsresistansHela' => $_POST["isolationsresistansHela"],

                'grupp1' => $_POST["grupp1"],
                'isolationsResistans1' => $_POST["isolationsResistans1"],

                'grupp2' => $_POST["grupp2"],
                'isolationsResistans2' => $_POST["isolationsResistans2"],


                'konstatering' => $_POST["konstatering"],
                //'konstateradPlanering' => $_POST["konstateradPlanering"],

                'grupp3' => $_POST["grupp3"],
                'lkmin3' => $_POST["lkmin3"],
                'särkringsTyp3' => $_POST["särkringsTyp3"],

                'grupp4' => $_POST["grupp4"],
                'lkmin4' => $_POST["lkmin4"],
                'särkringsTyp4' => $_POST["särkringsTyp4"],

                'fabrikat' => $_POST["fabrikat"],
                'nominellaVärden' => $_POST["nominellaVärden"],
                'funktionsström' => $_POST["funktionsström"],
                'utlösningstid' => $_POST["utlösningstid"],

                'utrustning1' => $_POST["utrustning1"],
                'utrustning2' => $_POST["utrustning2"],
                'utrustning3' => $_POST["utrustning3"],

                'tillverkare1' => $_POST["tillverkare1"],
                'tillverkare2' => $_POST["tillverkare2"],
                'tillverkare3' => $_POST["tillverkare3"],

                'typ1' => $_POST["typ1"],
                'typ2' => $_POST["typ2"],
                'typ3' => $_POST["typ3"],

                'resultat' => $_POST["resultat"],
                'bristerDatum' => $_POST["bristerDatum"],

                'besiktningsNamn' => $_POST["besiktningsNamn"],
                'besiktningsUnderskrift' => $_POST["besiktningsUnderskrift"],
                'besiktningsTid' => $_POST["besiktningsTid"],
                'besiktningsPlats' => $_POST["besiktningsPlats"],

                'elNamn' => $_POST["elNamn"],
                'elUnderskrift' => $_POST["elUnderskrift"],
                'besiktningsUnderskrift2' => $_POST["besiktningsUnderskrift2"],
                'besiktningsPlats2' => $_POST["besiktningsPlats2"]

            ];*/
            header("location: kund");
        } else {
            header("location: login");
        }
        /*$myJSON = json_encode($obj);
        echo $myJSON;
        $model["message"] = $this->sendMail($myJSON);
*/
        //return $this->render("login");
    }

    private function sendMail($json) {
        $mail = new PHPMailer(true);
        $message = null;
        try {
            //Server settings
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            //$mail->Host = 'smtp.gmail.com';
            $mail->Host = 'energi-ax.mail.protection.outlook.com';
            $mail->SMTPAuth = true;
            $mail->Username = "andreoberg98@gmail.com"; // Ange mail som skall användas OBS! Behöver ändra settings på google konto för att tillåta less secure apps
            $mail->Password = "";

            $mail->SMTPSecure = 'tls'; // tls eller sls (tls med google konton)
            $mail->Port = 587;

            $mail->setFrom('sender@example.com', 'Admin'); // Lite oklart med denna rad bort sätt från att kontot som skickar får namnet Admin i detta fall
            //$mail->addAddress('test@example.net', 'Recipient1');
            $mail->addAddress('andreoberg98@gmail.com'); // Till vem mailet skickas
            //$mail->addReplyTo('noreply@example.com', 'noreply');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

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

    private function verifyInpuit($key) {

    }

}

?>