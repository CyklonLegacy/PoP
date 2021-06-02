<?php

require_once "controllers/fastighetController.php";
require_once "controllers/besiktningController.php";

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

} else {
    header("Location: index.php/fastighet");
    //http_response_code(404);
    //echo "No matching route found";
}



?>