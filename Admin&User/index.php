<?php

require_once "controllers/fastighetController.php";
require_once "controllers/besiktningController.php";
require_once "controllers/loginController.php";
require_once "controllers/adminController.php";
require_once "controllers/kundController.php";
require_once "controllers/adminBesiktningController.php";

$scriptName = $_SERVER["SCRIPT_NAME"];
$requestUri = $_SERVER["REQUEST_URI"];

$path = "";
if (strpos($requestUri, $scriptName) === 0) $path = substr($requestUri, strlen($scriptName));
else if (strpos($requestUri, dirname($scriptName)) === 0) $path = substr($requestUri, strlen(dirname($scriptName)));

if (strpos($path, "?") !== false) $path = substr($path, 0, strpos($path, "?"));

$method = $_SERVER["REQUEST_METHOD"];
if ($path == "/fastighet" && $method == "GET") {
    $controller = new fastighetController();
    echo $controller->index();

} else if ($path == "/fastighet" && $method == "POST") {
    $controller = new fastighetController();
    echo $controller->saveFastighetsForm();

} else if ($path == "/besiktning" && $method == "GET") {
    $controller = new besiktningController();
    echo $controller->index();

} else if ($path == "/besiktning" && $method == "POST") {
    $controller = new besiktningController();
    echo $controller->saveBesiktning();

} else if ($path == "/login" && $method == "GET") {
    $controller = new loginController();
    echo $controller->index();

} else if ($path == "/login" && $method == "POST") {
    $controller = new loginController();
    echo $controller->login();

} else if ($path == "/kund" && $method == "GET") {
    $controller = new kundController();
    echo $controller->index();

} else if ($path == "/kund" && $method == "POST") {
    $controller = new kundController();
    echo $controller->createForm();

} else if ($path == "/admin" && $method == "GET") {
    $controller = new adminController();
    echo $controller->index();

} else if ($path == "/admin" && $method == "POST") {
    $controller = new adminController();
    echo $controller->saveBesiktning();
} else if ($path == "/adminBesiktning" && $method == "GET") {
    $controller = new adminBesiktningController();
    echo $controller->index();
}else if ($path == "/adminBesiktning" && $method == "POST") {
    $controller = new adminBesiktningController();
    echo $controller->updateBesiktning();
} else {
    header("Location: index.php");
    //$controller = new fastighetController();
    //echo $controller->index();
    //header("Location: index.php/fastighet");
    //http_response_code(404);
    //echo "No matching route found";
}



?>